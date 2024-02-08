<?php

namespace App\Http\Controllers;

use App\Models\batik;
use Illuminate\Http\Request;

class batikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        if (!$req->session()->has('user_id') || $req->session()->get('user_type') !== 'admin') {
            return redirect('404')->with('error', 'login o sek');
        }
        $user_id = $req->session()->get('user_id');
        $data = batik::where('IsDelete',0)->paginate(100);
        return view('batik.batik-read', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('batik.batik-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $batik = new batik();
        $batik->nama_batik = $request->nama_batik;
        $batik->foto_batik = $request->foto;
        $batik->kategori_batik = $request->kategori_batik;
        $batik->stok_batik = $request->stok_batik;
        $batik->save();
    
        return redirect('/batik-read')->with('pesan', 'Data batik Berhasil Disimpan');
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}