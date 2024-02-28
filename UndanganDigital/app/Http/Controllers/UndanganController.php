<?php

namespace App\Http\Controllers;

use App\Models\UndanganModel;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    protected $id_template;
    protected $nama_anak;
    protected $nama_bapak;
    protected $nama_ibu;
    protected $kalimat_sambutan;
    protected $tanggal_acara;
    protected $lokasi_acara;
    protected $rvsp;

    protected $undanganModel;

    public function __construct()
    {
        $this->undanganModel = new UndanganModel();
    }

    public function index()
    {
        /*  */


        return view('undangan.index');
    }
}
