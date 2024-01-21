<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $req)
    {
        if (!$req->session()->has('user_id') || $req->session()->get('user_type') !== 'user') {
            // Redirect jika tidak ada sesi user_id atau user_type bukan admin
            return view('admin.index');
        }
        $user_id = $req->session()->get('user_id');
// Tambahkan kondisi where untuk user_id

        return view('user.index');
    }
}