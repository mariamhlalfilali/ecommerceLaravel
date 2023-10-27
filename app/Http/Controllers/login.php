<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class login extends Controller
{
    //
        public function getData(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'password' => 'required|min:8'
            ]);

            $name = $request->name;
            $password = $request->password;
            $donnees = ['name' => $name, 'password' => $password];

            if (Auth::attempt($donnees)) {
                $request->session()->regenerate();
                return redirect("/");
            } else {
                return back()->with('error', 'Incorrect name or password !!');
            }
        }


    
}
/*  $data = [
            'name' => $name,
            'psw' => $password
        ];
    return view("Acceuil", $data);
*/