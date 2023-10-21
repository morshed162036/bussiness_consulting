<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Server\Ceo_message;
use Illuminate\Support\Facades\File;
use Image;
class CEOMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = Ceo_message::get()->first();
        return view('server.ceo_message.index')->with(compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $message = Ceo_message::get()->first();
        return view('server.ceo_message.edit')->with(compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            
            'name' => 'required',
            'designation' => 'required',
            'title' => 'required',
            'pera_1' => 'required',
        ];
        $message = Ceo_message::findorFail($id);
        $message->name = $request->name;
        $message->designation = $request->designation;
        $message->title = $request->title;
        $message->pera_1 = $request->pera_1;
        $message->pera_2 = $request->pera_2;
        if($request->hasFile('image')){
            $exists = 'images/ceo/'.$message->image;
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
                $imagePath = 'images/ceo/'.$imageName;
                Image::make($image_temp)->resize(510,730)->save($imagePath);
                $message->image = $imageName;
            }
        }
        if($request->hasFile('sign')){
            $exists = 'images/ceo/'.$message->sign;
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $image_temp = $request->file('sign');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
                $imagePath = 'images/ceo/'.$imageName;
                Image::make($image_temp)->resize(157,50)->save($imagePath);
                $message->sign = $imageName;
            }
        }
        $message->update();
        return redirect(route('ceo-message.index'))->with('success','CEO Message Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
