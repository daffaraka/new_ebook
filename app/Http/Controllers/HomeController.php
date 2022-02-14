<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

   
    public function index()

    {  
        $account = Auth::user();
        return view('home',['account'=>$account]);
    }


    public function beranda()
    {
        $account = Auth::user();
       
        return view('beranda',['account'=>$account]);
    }
}
