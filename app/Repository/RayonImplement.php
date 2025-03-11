<?php

namespace App\Repository;

use App\Models\Rayon;
use App\Repository\RayonRepository;

class RayonImplement implements RayonRepository
{
    public function getAll()
    {
        Rayon::all();
    }

    public function findById(int $id)
    {
        Rayon::find($id);
    }

    public function store($data)
    {
        Rayon::create($data);
    }
    public function update($data, $id)
    {
        $rayon = Rayon::findOrFail($id);
        $rayon->update($data);
    }
    public function destroy($id)
    {
        $rayon = Rayon::findorFail($id);
        $rayon->delete();
    }
}
