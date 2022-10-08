<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $perPage = request('perpage') ? intval(request('perpage')) : 10;
        // $users = User::orderByDesc('id')->paginate($perPage);
        $users = User::all();

        return response()->json([
            'ok' => true,
            'data' => $users,
        ]);
    }

    public function store(Request $request)
    {
        $fields = $request->all();
        $user = User::create($fields);

        return response()->json([
            'ok' => true,
            'data' => $user
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json([
            'ok' => true,
            'data' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $fields = $request->all();
        $user = User::findOrFail($id);
        $user->update($fields);

        return response()->json([
            'ok' => true,
            'data' => $user
        ]);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 0]);

        return response()->json([
            'ok' => true,
            'data' => $user
        ]);
    }
}
