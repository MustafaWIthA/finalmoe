<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //



    public function index()
    {
        return view('users.index');
    }

 /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       
         return view('users.show', compact('user'));
    }


    public function create()
    {
        return view('users.create',[
            'Roles'=>Role::all(),

        ]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'first_name' => 'required|max:255',
            'second_name' => 'required|max:255',
            'last_name' => 'required',
            'birthdate' => 'required|max:25',
            'username' => 'required|max:100|unique:users',
            'email' => 'required|max:100|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles'=>'required',
      
        ]);
        
        $user= new User([
            'first_name' => $request['first_name'],
            'second_name' => $request['second_name'], 
            'last_name' => $request['last_name'],
           // 'profile' => $request['profile'],
            'birthdate' => $request['birthdate'], 
            'username' => $request['username'], 
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        $user->save();

    $roles = $attributes['roles'];

       return redirect()->route('users.index')->with('success','the User has been created successfully!');


    }


   
}