<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rayon;
use Illuminate\Http\Request;
use App\Repository\RayonRepository;

class RayonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( )
    {
        //
        $rayons = Rayon::all();
        return view('rayon.index', compact('rayons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('rayon.create');
    }

    protected $rayonRepository
;

    public function __construct(RayonRepository $repository)
    {
        $this->rayonRepository = $repository;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->rayonRepository->store($request->all());
        return redirect()->route('rayon.index')->with('success', 'Data rayon berhasil ditambahkan');
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
        $rayon = Rayon::findOrFail($id);
        return view('rayon.edit', compact('rayon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $this->rayonRepository
->update($request->all(), $id);
        return redirect()->route('rayon.index')->with('success', 'Data rayon berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rayon = Rayon::find($id);

        if (!$rayon) {
            return redirect()->route('rayon.index')->with('deleted', 'Data rayon tidak ditemukan');
        }

        $this->rayonRepository
->destroy($id);
        return redirect()->route('rayon.index')->with('deleted', 'Data rayon berhasil dihapus');
    }
}
