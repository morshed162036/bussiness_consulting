<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Server\Banner;
use App\Models\Server\Counter;
use App\Models\Server\Review;
use App\Models\Server\PricingPlane;
use App\Models\Server\About_company;
use App\Models\Server\Service\Service;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::where('status','Active')->get()->all();
        $banner_count = Banner::get()->count();
        $about_us = About_company::get()->first();
        $services = Service::with('service_details')->paginate(6);
        $service_count = Service::get()->count();
        $pricingplans = PricingPlane::get()->all();
        $counter = Counter::get()->first();
        $reviews = Review::get()->all();
        return view('client.home-page')->with(compact('banners','banner_count','about_us','services','service_count','pricingplans','counter','reviews'));
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
        //
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
