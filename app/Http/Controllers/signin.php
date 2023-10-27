<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class signin extends Controller
{
    //Signin    
    public function insertDataIntoClient(UserRequest $request){
        $request->validate([

        ]);
        $nom_c=$request->name;
        $prenom_c=$request->prenom;
        $email_c=$request->email;
        $password_c=Hash::make($request->password); 
        $role="USER";
        $c = DB::insert('insert into users(name,prenom,email,password,role) values (?,  ?, ?, ?, ?)', [ $nom_c, $prenom_c, $email_c, $password_c,$role]);
        return redirect("/login")->with('success','you have successfully registered .');
    }
}
