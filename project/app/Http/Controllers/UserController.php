<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function index(){

    }

    public function store(Request $request){
        $request->flash();
        $request->validate([
            'name' => 'required',
            'email'=> 'email|required|unique:users',
            'password' => 'required|min:8',
            'username' => 'required|unique:users',
            'cpf' => 'required|unique:users',
            'checkbox' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        if($user){
            //return redirect()->route('apelido');
            return redirect('/login');
        }
    }

    function read(){

    }

    function update(){

    }

    function delete(){

    }
}
