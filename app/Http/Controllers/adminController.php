<?php

namespace App\Http\Controllers;

use App\Models\batik;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $req)
    {
        if (!$req->session()->has('user_id') || $req->session()->get('user_type') !== 'admin') {
            return redirect('404')->with('error', 'Anda tidak diizinkan');
        }
        $user_id = $req->session()->get('user_id');
        $data = batik::where('IsDelete',0)->paginate(1000000);
        return view('admin.index', ['data' => $data]);
    }
}