<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UndanganModel extends Model
{
    use HasFactory;

    protected $table = 'template';
    protected $primaryKey = 'id_template';
    protected $fillable = ['nama_anak', 'nama_bapak', 'kalimat_sambutan', 'tanggal_acara', 'lokasi_acara', 'rsvp'];
    protected $timestamps = false;


}
