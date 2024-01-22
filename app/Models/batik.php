<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batik extends Model
{
    use HasFactory;
    protected $table = 'batik';
    protected $primaryKey = 'id_batik';
    protected $fillable = ['id_batik', 'nama_batik', 'foto_batik', 'kategori_batik', 'stok_batik'];
}