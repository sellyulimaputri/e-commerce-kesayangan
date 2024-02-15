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
        $this->validate($request, [
            'nama_batik'     => 'required',
            'foto_batik'     => 'required|image|mimes:png,jpg,jpeg',
            'kategori_batik'     => 'required',
            'stok_batik'     => 'required',
            'harga_batik'   => 'required'
        ]);

         //upload image
        $image = $request->file('foto_batik');
        $image->storeAs('public/upload', $image->hashName());

        $batik = batik::create([
            'nama_batik'     => $request->nama_batik,
            'foto_batik'     => $image->hashName(),
            'kategori_batik'   => $request->kategori_batik,
            'stok_batik'   => $request->stok_batik,
            'harga_batik'   => $request->harga_batik,
        ]);
        
        // $batik = new batik();
        // $batik->nama_batik = $request->nama_batik;
        // $batik->foto_batik = $request->foto;
        // $batik->kategori_batik = $request->kategori_batik;
        // $batik->stok_batik = $request->stok_batik;
        // $batik->harga_batik = $request->harga_batik;
        // $batik->save();
    
        // return redirect('/batik-read')->with('pesan', 'Data batik Berhasil Disimpan');

        if($batik){
            //redirect dengan pesan sukses
            return redirect()->route('batik.read')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('batik.read')->with(['error' => 'Data Gagal Disimpan!']);
        }
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
