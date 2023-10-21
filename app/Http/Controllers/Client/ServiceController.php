<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Server\Service\Service;
use App\Models\Server\Service\Service_detail;
use App\Models\Server\Company_detail;
use App\Models\Server\Appointment;
use App\Models\Server\Question;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('service_details')->paginate(6);
        return view('client.service')->with(compact('services'));
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
        //dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',

        ];
        $this->validate($request, $rules);
        $order = new Appointment();
        $order->service_id = $request->service_id;
        
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->date = date('Y-m-d');
        $order->description = $request->message;
        $order->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $company = Company_detail::get()->first();
        $services = Service::with('service_details')->get()->all();
        $details = Service_detail::with('service')->where('id',$id)->get()->first();
        $questions = Question::where('type','Service')->where('service_id',$id)->get()->all();
        //dd($questions);
        return view('client.service-details')->with(compact('services','details','company','questions'));
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
