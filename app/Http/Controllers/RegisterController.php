<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{

    public function insert(Request $request)
    {

        // $name = $request->input('name');
        // $email = $request->input('email');
        // $contact = $request->input('contact');
        // $password =  $request->input('password');
        // $this->validate($request, [
        //     'email' => 'required',
        //     'contact' => 'required |numeric',
        //     'password' => 'required |min:8 | confirmed'

        // ]);

        // DB::insert('INSERT INTO register (name,email,contact,password) values(?,?,?,?)',[$name,$email,$contact,$password]);

        // echo 'data inserted successfully';

        }
    }
