<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\SubMateri;
use App\Models\NilaiSiswa;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Materi::with('subMateri')->get();
        return view('materi.index', compact('materis'));
    }

    public function show($materi, $sub)
    {
        return view("materi.$materi.$sub");
    }

    public function simpanNilai(Request $request, $materiId)
    {
        $request->validate([
            'nilai' => 'required|numeric|min:0|max:100'
        ]);

        NilaiSiswa::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'materi_id' => $materiId
            ],
            [
                'nilai' => $request->nilai
            ]
        );

        return redirect('/dashboard')->with('success', 'Nilai tersimpan');
    }
}
