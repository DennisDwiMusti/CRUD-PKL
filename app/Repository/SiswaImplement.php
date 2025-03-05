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
}
