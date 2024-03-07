<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    
        $data = [
          'level_id'=> 2,
          'username' => 'manager_tiga',
          'nama' => 'Manager 3',
          'password' => Hash::make('12345')
        ];
        //UserModel::create($data);

    // coba akses model userModel
    $user = UserModel::all();
    return view('user', ['data' => $user]);
    }
}
