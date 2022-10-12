<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Friend;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $customers = Friend::all();

        return response()->json([
            'ok' => true,
            'data' => $customers,
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->all();
        $customer = Friend::create($fields);

        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }

    public function show($id)
    {
        $customer = Friend::findOrFail($id);
        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }

    public function update(Request $request, $id)
    {
        $fields = $request->all();
        $customer = Friend::findOrFail($id);
        $customer->update($fields);

        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }

    public function destroy($id)
    {
        $customer = Friend::findOrFail($id);
        $customer->update(['status' => 0]);

        return response()->json([
            'ok' => true,
            'data' => $customer
        ]);
    }
}
