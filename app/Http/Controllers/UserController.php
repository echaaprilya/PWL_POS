<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
    
        $data = [
          'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1')->update($data);

    // coba akses model userModel
    $user = UserModel::all();
    return view('user', ['data' => $user]);
    }
}
