<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        $data = compact('customers');
        return view('table')->with($data);
    }

    public function delete($id)
    {
        $customers =  Customers::find($id);
        if ($customers) {
            $customers->delete();
            return redirect()->back();
        } else {

            return redirect()->back();
        }
    }
    public function edit($id)
    {
        $customers = Customers::find($id);
        $url = 'customers/update/' . $id;
        $title = 'Update Customer';
        $data = compact('customers', 'url', 'title');
        return view('register')->with($data);
    }
    public function update($id, Request $request)
    {
        $customer = Customers::find($id);
        $customer->name = $request->input("name");
        $customer->email = $request->input("email");
        $customer->gender = $request->input("gender");
        $customer->address = $request->input("address");
        $customer->state = $request->input('state');
        $customer->city = $request->input("city");

        $customer->save();
        return view('customer');
    }
}
