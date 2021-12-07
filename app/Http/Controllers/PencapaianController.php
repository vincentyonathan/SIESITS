<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pencapaian;

class PencapaianController extends Controller
{
    public function index()
    {
        // return view('pencapaian.index');
    }
 
    public function addCapaian(Request $request)
    {
        $request->validate([
            'id_kegiatan' => 'required',
            'nama_pokok' => 'required',
            'deskripsi' => 'required',
            'bobot' => 'required',
        ]);

        Pencapaian::create([
            'id_kegiatan' => $request->get('id_kegiatan'),
            'nama_pokok' => $request->get('nama_pokok'),
            'deskripsi' => $request->get('deskripsi'),
            'bobot' => $request->get('bobot'),
        ]);

        return redirect()->route('editkegiatan',$request->id_kegiatan)->with('success', 'Data Pencapaian berhasil ditambahkan');
    }


    public function deleteCapaian($id)
    {

        Pencapaian::where('id', $id)->delete();

        return redirect()->route('editkegiatan',$id)->with('success', 'Data Pencapaian berhasil dihapus');
    }

}
