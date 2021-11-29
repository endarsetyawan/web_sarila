<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function __construct()
    {
        $this->Dokter = new Dokter();
    }
    public function index()
    {
        $data = [
            'dokter' => $this->Dokter->allData(),
        ];
        return view('admin.dokter.dokter', $data);
    }
    public function addDokter()
    {
        Request()->validate([
            'nama_dokter' => 'required',
            'jabatan' => 'required',
            'siang' => 'required',
            'malam' => 'required',
            'keterangan' => 'required',
        ]);
        $data = [
            'nama_dokter' => Request()->nama_dokter,
            'jabatan' => Request()->jabatan,
            'siang' => Request()->siang,
            'malam' => Request()->malam,
            'keterangan' => Request()->keterangan,
        ];
        $this->Dokter->addData($data);
        return redirect()->route('dokter')->with('pesan', 'Data Dokter Berhasil di Input');
    }
    public function updatedokter($id)
    {
        $data = [
            'dokter' => $this->Dokter->detailData($id),
        ];
        return view('admin.dokter.updatedokter',$data);
    }
    public function store($id)
    {
        Request()->validate([
            'nama_dokter' => 'required',
            'jabatan' => 'required',
            'siang' => 'required',
            'malam' => 'required',
            'keterangan' => 'required',
        ]);
        $data = [
            'nama_dokter' => Request()->nama_dokter,
            'jabatan' => Request()->jabatan,
            'siang' => Request()->siang,
            'malam' => Request()->malam,
            'keterangan' => Request()->keterangan,
        ];
        $this->Dokter->updateData($id, $data);
        return redirect()->route('dokter')->with('pesan', 'Data Dokter Berhasil di Edit');
    }
}
