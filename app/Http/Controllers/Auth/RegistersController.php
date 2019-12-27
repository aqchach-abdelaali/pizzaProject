<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistersRequest;

class RegistersController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistersRequest $request)
    {
        User::create($request->all());
       /* User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password)
        ]);*/
        return back();
    }
}
