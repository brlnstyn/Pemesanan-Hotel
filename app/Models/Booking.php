<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = ['nama_pemesan', 'email', 'no_hp', 'nama_tamu', 'tipe_kamar', 'jumlah'];
}
