<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        return view('home',[
            'user'=>$user
        ]);
    }


 /**
     * Display the specified resource.
     *
     * @param  \App\Donors  $donors
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('reports.index');
    }


}
