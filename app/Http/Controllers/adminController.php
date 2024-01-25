<?php

namespace App\Http\Controllers;

use App\Models\batik;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $req)
    {
        if (!$req->session()->has('user_id') || $req->session()->get('user_type') !== 'admin') {
            return redirect('404')->with('error', 'login o sek');
        }
        $user_id = $req->session()->get('user_id');
        $data = batik::where('IsDelete',0)->paginate(100);
        return view('admin.index', ['data' => $data]);
    }
}