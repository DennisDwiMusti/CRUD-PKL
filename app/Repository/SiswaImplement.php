<?php

namespace App\Repository;

use App\Models\Siswa;
use App\Repository\SiswaRepository;

class SiswaImplement implements SiswaRepository
{

    public function getAll()
    {
        Siswa::all();
    }

    public function findById(int $id)
    {
        Siswa::find($id);
    }
    public function store($data)
    {
        Siswa::create($data);
    }

    public function update($data, $id)
    {
        $siswa = Siswa::findorFail($id);
        $siswa->update($data);
    }
    public function destroy($id)
    {
        $siswa = Siswa::findorFail($id);
        $siswa->delete();
    }
}
