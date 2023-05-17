<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
  
        return view('admin.index',compact('admin'));
    }


    public function store(){
        $user = User::create([
            
            'name'=>request('adminName'),
            'email' =>request('adminEmail'),
            'usertype'=>request('usertype'),
            'password'=>Hash::make(request('adminPassword')),
        ]);

        Admin::create([
            'user_id'=>$user->id,
            
            'adminName'=> request ('adminName'),
            'adminEmail'=> request ('adminEmail'),
            'adminPassword'=>request('adminPassword'),

        ]);
        return redirect()->to('login');
    }
}
