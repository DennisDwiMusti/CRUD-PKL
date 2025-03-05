<?php

namespace App\Repository;

interface SiswaRepository
{
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
}
