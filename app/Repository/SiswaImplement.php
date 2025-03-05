<?php

namespace App\Repository;

use App\Models\Siswa;
use App\Repository\Repository;

class SiswaImplement implements Repository
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
