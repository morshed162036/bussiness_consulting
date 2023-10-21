<?php

namespace App\Http\Controllers\Server\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
use App\Models\Server\Business\Setup;
use App\Models\Server\Business\Setup_detail;
class SetupDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Setup_detail::with('setup')->get()->all();
        return view('server.business_setup.details.index',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Setup::where('status','Empty')->get()->all();
        return view('server.business_setup.details.create')->with(compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'service_id'=>'required',
            'description'=>'required',
            'our_plan'=>'required'
            ];
        $this->validate($request,$rules);

        $detail = new Setup_detail();
        $detail->setup_id = $request->service_id;
        $detail->description = $request->description;
        $detail->our_plan = $request->our_plan;
        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
                $imagePath = 'images/setup/'.$imageName;
                Image::make($image_temp)->resize(1920,1080)->save($imagePath);
                $detail->image = $imageName;
            }
        }
        $setup = Setup::findorFail($request->service_id);
        $setup->status = 'Attach';
        $setup->update();
        
        $detail->save();
        return redirect(route('setup-detail.index'))->with('success','New Setup-details Save Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Setup::where('status','Empty')->get()->all();
        $detail = Setup_detail::with('setup')->where('id',$id)->get()->first();
        return view('server.business_setup.details.edit')->with(compact('detail','services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'description'=>'required',
            'our_plan'=>'required'
            ];
        $this->validate($request,$rules);

        $detail = Setup_detail::findorFail($id);
        if($request->service_id){
             
            Setup::where('id',$detail->setup_id)->update(['status'=>'Empty']);
            Setup::where('id',$request->setup_id)->update(['status'=>'Attach']);
            $detail->setup_id = $request->service_id;
        }
       
        $detail->description = $request->description;
        $detail->our_plan = $request->our_plan;
        
        if($request->hasFile('image')){
            $exists = 'images/setup/'.$detail->image;
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
                $imagePath = 'images/setup/'.$imageName;
                Image::make($image_temp)->resize(1920,1080)->save($imagePath);
                $detail->image = $imageName;
            }
        }

        
        $detail->update();
        return redirect(route('setup-detail.index'))->with('success','Setup Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail = Setup_detail::with('setup')->findorFail($id);
        $exists = 'images/setup/'.$detail->image;
        if(File::exists($exists))
        {
            File::delete($exists);
        }
        $setup = Setup::findorFail($detail->setup->id);
        $setup->status = 'Empty';
        $setup->update();

        $detail->delete();
        return redirect(route('setup-detail.index'))->with('success','Setup Details Delete Successfully!');
    }
}
