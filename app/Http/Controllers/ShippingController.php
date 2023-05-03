<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function index()
    {
        $shippings = Shipping::all();
        return response()->json($shippings);
    }

    public function show($id)
    {
        $shipping = Shipping::findOrFail($id);
        return response()->json($shipping);
    }

    public function store(Request $request)
    {
        $shipping = Shipping::create($request->all());
        return response()->json($shipping, 201);
    }

    public function update(Request $request, $id)
    {
        $shipping = Shipping::findOrFail($id);
        $shipping->update($request->all());
        return response()->json($shipping);
    }

    public function getByStatus($status)
    {
        $shippings = Shipping::where('status', $status)->get();
        return response()->json($shippings);
    }

    public function getByCustomer($customerId)
    {
        $shippings = Shipping::where('sender_name', $customerId)->get();
        return response()->json($shippings);
    }
}
