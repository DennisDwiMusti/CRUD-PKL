<?php

namespace App\Repository;

use App\Models\Siswa;
use App\Repository\SiswaRepository;

class SiswaImplement implements SiswaRepository
{
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
