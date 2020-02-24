<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class CustomersController extends BaseController
{
    public function index()
    {
        $customers = \Bigcommerce\Api\Client::getCustomers();
        
        return view('customers', compact('customers'));
    }
}
