<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers; // Properly capitalized "Customer" model

class RegistrationController extends Controller
{
    public function index()
    {
        $url = "register";
        $title = "Create Customers";
        $customers = null;
        $data = compact('url', 'title', 'customers');
        return view('register')->with($data);
    }

    public function register(Request $request)
    {
        $customer = new Customers; // Properly capitalized "Customer" model

        $customer->name = $request->input("name");
        $customer->email = $request->input("email");
        $customer->gender = $request->input("gender");
        $customer->address = $request->input("address");
        $customer->state = $request->input('state');
        $customer->city = $request->input("city");

        $customer->save(); // Save the customer record

        return redirect('customers');
    }
}
