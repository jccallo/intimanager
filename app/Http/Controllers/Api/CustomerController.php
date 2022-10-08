<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return response()->json([
            'ok' => true,
            'data' => $customers,
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->all();
        $customer = Customer::create($fields);

        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }

    public function update(Request $request, $id)
    {
        $fields = $request->all();
        $customer = Customer::findOrFail($id);
        $customer->update($fields);

        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update(['status' => 0]);

        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }
}
