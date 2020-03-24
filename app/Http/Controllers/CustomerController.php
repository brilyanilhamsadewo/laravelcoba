<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Menampilkan semua data Customer
        $customers = DB::table('Customers')->get();
        return view('customer.index',['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'phone' => 'required',
    		'email' => 'required',
    		'street' => 'required',
    		'city' => 'required',
    		'state' => 'required',
    		'zip_code' => 'required'
    	]);
 
        Customer::create([
    		'first_name' => $request->first_name,
    		'last_name' => $request->last_name,
    		'phone' => $request->phone,
    		'email' => $request->email,
    		'street' => $request->street,
    		'city' => $request->city,
    		'state' => $request->state,
    		'zip_code' => $request->zip_code
    	]);
 
    	return redirect("/customer");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $customers = Customer::find($id);
        return view('customer.edit',['customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
         ]);

       $customers = Customer::find($id);
       $customers->first_name = $request->first_name;
       $customers->last_name = $request->last_name;
       $customers->phone = $request->phone;
       $customers->email = $request->email;
       $customers->street = $request->street;
       $customers->city = $request->city;
       $customers->state = $request->state;
       $customers->zip_code = $request->zip_code;
       $customers->save();
        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customers = Customer::find($id);
        $customers->delete();
        return redirect('/customer');
    }
}
