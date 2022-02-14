<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    
    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;

  
    public function __construct()
    {
        $this->middleware('guest');
    }

  
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'first_name' => ['required', 'string', 'max:25'],
            'middle_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required'],
            'gender_id' => ['required'],
            'display_picture_link' => ['mimes:jpg,bmp,png']
        ]);
    }

  
    protected function create(array $data)
    {
      
      
        $imageName = request()->file('display_picture_link')->getClientOriginalName();
        request()->file('display_picture_link')->move('storage/user_pic/',request()->first_name.'-'.$imageName);
      
        $user = User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
            'gender_id' => $data['gender_id'],
            'display_picture_link' => $data['first_name'].'-'.$imageName,
        ]);


        return $user;
        
    }
}
