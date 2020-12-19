<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return UserResource::collection($user);

    }
    public function store(Request $request)
    {
        User::create($request->all());
        $usuario = User::where('email', $request->email)->first();
        return [
        'created' => true,
        'user_id'=> $usuario->id
    ];
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return ['updated' => true];
    }

    public function destroy($id)
    {
        User::destroy($id);
        return ['deleted' => true];
    }

}



