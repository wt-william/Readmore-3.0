<?php

namespace App\Http\Controllers;

use App\Models\signupModel;
use Illuminate\Http\Request;

class signupController extends Controller
{
    //
    function save(Request $req)
    {
        $user = new signupModel();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        return redirect('/');
    }
}
