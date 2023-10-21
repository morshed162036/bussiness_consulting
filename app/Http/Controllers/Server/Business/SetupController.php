<?php

namespace App\Http\Controllers\Server\Business;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Server\Business\Setup;
use App\Models\Server\Business\Setup_detail;
use Image;
use Illuminate\Support\Facades\File;
class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Setup::get()->all();
        return view('server.business_setup.type.index')->with(compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('server.business_setup.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'title'=>'required',
            ];
        $this->validate($request,$rules);

        $service = new Setup();
        $service->title = $request->title;
        
        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
                $imagePath = 'images/setup/'.$imageName;
                Image::make($image_temp)->resize(355,235)->save($imagePath);
                $service->image = $imageName;
            }
        }

        
        $service->save();
        return redirect(route('setup.index'))->with('success','New Setup Save Successfully!');
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
        $service = Setup::where('id',$id)->get()->first();
        return view('server.business_setup.type.edit')->with(compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title'=>'required',
            ];
        $this->validate($request,$rules);

        $service = Setup::findorFail($id);
        $service->title = $request->title;
        
        if($request->hasFile('image')){
            $exists = 'images/setup/'.$service->image;
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
                Image::make($image_temp)->resize(355,235)->save($imagePath);
                $service->image = $imageName;
            }
        }

        
        $service->update();
        return redirect(route('setup.index'))->with('success','Setup Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Setup::with('setup_details')->findorFail($id);
        $exists = 'images/service/'.$service->image;
        if(File::exists($exists))
        {
            File::delete($exists);
        }
        if($service->service_details)
        {
            $details = Service_detail::findorFail($service->setup_details->id);
            $exists_d = 'images/setup/'.$service->setup_details->image;
            if(File::exists($exists_d))
            {
                File::delete($exists_d);
            }
            $details->delete();
        }
        $service->delete();
        return redirect(route('setup.index'))->with('success','Setup Delete Successfully!');
    }
}
