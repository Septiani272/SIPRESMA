<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'npm' => 'required|string|min:9|max:9',
            'name' => 'required|string|max:255',
            'prodi'=>'required',
            'jenis_kelamin'=>'required',
            'phone' => 'required|numeric|min:10',
            'password' => 'required|string|min:8',
            
        ]);

        Auth::login($user = User::create([
            'npm' => $request->npm,
            'name' => $request->name, 
            'remember_token'=> Str::random(60),
            'prodi' => $request->prodi,
            'jenis_kelamin' => $request->jenis_kelamin,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
           
            
        ]));

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
