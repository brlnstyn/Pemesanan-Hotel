<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cetak extends Model
{
    use HasFactory;
    protected $table = 'buktis';
    protected $fillable = ['tgl_check_in', 'tgl_check_out', 'nama_pemesan', 'nama_tamu', 'email', 'no_hp', 'tipe_kamar', 'jumlah', 'crated_at'];
}
