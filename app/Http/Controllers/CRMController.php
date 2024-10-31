<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Promotion;
use Illuminate\Http\Request;

class CRMController extends Controller
{
    public function showSendPromotionForm()
    {
        $customers = Customer::all();
        $promotions = Promotion::all();
        return view('crm.sendpromotion', compact('customers', 'promotions'));
    }

    public function sendPromotion(Request $request)
    {
        // Validasi input
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'promotion_id' => 'required|exists:promotions,id',
        ]);

        // Logika untuk mengirim promosi
        $customer = Customer::find($request->customer_id);
        $promotion = Promotion::find($request->promotion_id);

        // Contoh notifikasi atau email ke customer
        // Anda bisa membuat logika pengiriman email atau notifikasi di sini

        return back()->with('success', 'Promotion sent successfully!');
    }
}
