<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

use function PHPUnit\Framework\isNull;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customers::all();
        $data = compact('customers');
        return view('table')->with($data);
    }
    public function trash()
    {
        $customers = Customers::onlyTrashed()->get();
        $data = compact('customers');
        return view('trashTable')->with($data);
    }   
    public function trashDelete($id)
    {
        $customers = Customers::withTrashed()->find($id);
        if(is_null($customers)){
            return redirect()->back();
        }else {
            $customers->forceDelete();
            return redirect()->back();
        }
    }
    public function trashRestore($id)
    {
        $customers = Customers::withTrashed()->find($id);
        if(is_null($customers)){
            return redirect()->back();
        }else {
            $customers->restore();
            return redirect('customers');        
        }
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
        return redirect('customers');
    }
}
