<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Customers;

class CustomerController extends Controller
{
    public function index (){
        $customers = Customers::all();
        $data = compact('customers');
        return view('table')->with($data);
    }
}
