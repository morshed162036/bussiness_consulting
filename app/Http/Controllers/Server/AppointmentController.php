<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Server\Appointment;
use App\Models\Server\Service\Service;
use App\Models\Server\Business\Setup;
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Appointment::with('service','setup')->get()->all();
        //dd($orders);
        return view('server.order.index')->with(compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::get()->all();
        $setups = Setup::get()->all();
        return view('server.order.create')->with(compact('services','setups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required',

        ];
        $this->validate($request, $rules);
        $order = new Appointment();
        if($request->service_id)
        {
            $order->service_id = $request->service_id;
        }
        else
        {
            $order->setup_id = $request->setup_id;
        }
        
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->date = $request->date;
        $order->description = $request->description;
        $order->save();
        return redirect(route('order.index'))->with('success', 'Seccessfully update!');
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
        $services = Service::get()->all();
        $setups = Setup::get()->all();
        $order = Appointment::with('service','setup')->findorFail($id);
        return view('server.order.edit')->with(compact('order', 'services','setups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required',
        ];
        $order = Appointment::findorFail($id);
        if($request->service_id)
        {
            $order->service_id = $request->service_id;
        }
        else
        {
            $order->setup_id = $request->setup_id;
        }
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->remarks = $request->remarks;
        $order->date = $request->date;
        $order->description = $request->description;
        $order->status = $request->status;
        $order->update();
        return redirect(route('order.index'))->with('success', 'Successfuly update');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Appointment::findorFail($id)->delete();
        return redirect(route('order.index'))->with('success', 'Successfuly delete');


    }
}
