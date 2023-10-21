<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Server\Blog\Blog_post;
use App\Models\Server\Blog\Blog_category;
class BlogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog_post::with('category')->paginate(2);
        //$services = Service::with('service_details')->get()->all();
        $categories = Blog_category::get()->all();

        return view('client.blog-page')->with(compact('blogs','categories'));
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
        $blog = Blog_post::with('category')->where('id',$id)->get()->first();
        //$services = Service::with('service_details')->get()->all();
        $categories = Blog_category::get()->all();

        return view('client.blog-single-page')->with(compact('blog','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blog_post::with('category')->where('category_id',$id)->paginate(2);
        //$services = Service::with('service_details')->get()->all();
        $categories = Blog_category::get()->all();

        return view('client.blog-page')->with(compact('blogs','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
