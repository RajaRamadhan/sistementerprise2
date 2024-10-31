<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class PromotionController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('crm.promotions', compact('customers'));
    }
}
