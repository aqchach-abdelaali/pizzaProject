<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginsRequest;

class LoginsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginsRequest $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) 
            return \redirect('/');
        
            return back()->with([
                'color' => 'red-500',
                'message' => "Identifiant incorrect!"
            ]);      
    }

    public function destroy()
    {
        auth()->logout();

        return back();
    }
}
