<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout');
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'fullname' => 'required|string|max:40',
            'address' => 'required|string|max:40',
            'city' => 'required|string|max:40',
            'country' => 'required|string|max:40',
            'email' => 'required|email|max:40',
            'phone' => 'required|string|max:40',
        ]);

        // Création d'une nouvelle commande
        $order = new Order();
        $order->fullname = $request->fullname;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->country = $request->country;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->save();

        return redirect()->route('checkout')->with('success', 'Order placed successfully!');
    }
}
