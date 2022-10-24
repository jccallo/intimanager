<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    public function index()
    {
        $users = User::orderByDesc('id')->get();
        return $this->showResponse($users);
    }

    public function create()
    {
        $places = Place::pluck('nombre', 'id');
        return $this->showResponse(['places' => $places]);
    }

    public function store(Request $request)
    {
        $fields = $request->all();
        $user = User::create($fields);
        return $user;
        // return $this->showResponse($user, 201);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return $this->showResponse($user);
    }

    public function update(Request $request, $id)
    {
        $fields = $request->all();
        $user = User::findOrFail($id);
        $user->update($fields);
        return $this->showResponse($user);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 0]);
        return $this->showResponse($user);
    }
}
