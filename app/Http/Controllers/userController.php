<?php

namespace App\Http\Controllers;

use App\Models\batik;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(Request $req)
    {
        if (!$req->session()->has('user_id') || $req->session()->get('user_type') !== 'user') {
            return redirect('404')->with('error', 'login o sek');
        }
        $user_id = $req->session()->get('user_id');
        $data = batik::where('IsDelete',0)->paginate(100);
        return view('user.index', ['data' => $data]);
    }
}