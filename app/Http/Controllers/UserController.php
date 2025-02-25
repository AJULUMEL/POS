<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel; // Menambahkan penggunaan UserModel
use Illuminate\Support\Facades\Hash; // Menambahkan penggunaan Hash

class UserController extends Controller
{
    public function show($id, $name)
    {
        return view('user.profile', compact('id', 'name'));
    }

    public function index() // Menambahkan method index
    {
        // tambah data user dengan Eloquent Model
        $data = [
            'nama' => 'Pelanggan Pertama', // Mengubah nama
        ];
        UserModel::where('username', 'customer-1')->update($data); // update data user

        // coba akses model UserModel
        $user = UserModel::all(); // ambil semua data dari tabel m_user
        return view('user', ['data' => $user]); // Mengembalikan view dengan data user
    }
}