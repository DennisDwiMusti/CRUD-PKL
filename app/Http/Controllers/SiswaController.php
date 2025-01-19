<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $siswas = Siswa::all();
        return view('index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'NIS'=>'required',
            'rayon'=>'required',
            'rombel'=>'required',
        ], [
            'name.required' => 'Nama wajib diisi',
            'NIS.required' => 'NIS wajib diisi',
            'rayon.required' => 'Rayon wajib diisi',
            'rombel.required' => 'Rombel wajib diisi',
        ]);

        $proses = Siswa::create([
            'name' => $request->name,
            'NIS' => $request->NIS,
            'rayon' => $request->rayon,
            'rombel' => $request->rombel,
        ]);

        if ($proses) {
            return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan');
        } else {
            return redirect()->back()->with('failed', 'Data siswa gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $siswas = Siswa::where('id',$id)->first();
        return view('siswa.edit', compact('siswas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
