<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
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

 /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //dd($user);

        return view('Users.edit',[
            'Roles'=>Role::all(),
            'user'=>$user,
        ]);
    }
   

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //dd($user);
     
        $attributes = request()->validate([
            'first_name' => 'required|max:255',
            'second_name' => 'required|max:255',
            'last_name' => 'required',
            'birthdate' => 'required|max:25',
            'username' => ['required',Rule::unique('users')->ignore($user->id)],        
            'email' => ['required',Rule::unique('users')->ignore($user->id)],        
            'password' => ['string', 'min:8', 'confirmed'],
            'roles'=>'required',
      
        ]);
       

            $user->first_name = $request['first_name'];
            $user-> second_name = $request['second_name']; 
            $user-> last_name = $request['last_name'];
           // 'profile' => $request['profile'],
            $user-> birthdate = $request['birthdate'];
            $user-> username = $request['username'];
            $user-> email = $request['email'];
            $user-> password = Hash::make($request['password']);
            $user->save();
            DB::table('model_has_roles')->where('model_id',$user->id)->delete();

            $user->roles()->detach();
            $user->roles()->attach($request->input('roles') === null ? [] : $request->input('roles'));
       // $user = User::find($user);
       // $user->fill($attributes)->save();
            // $user->syncRoles($roles);

        return redirect()->back()->with('success','the user has been update successfully!');;
    }
}