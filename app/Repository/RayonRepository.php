<?php

namespace App\Repository;

interface RayonRepository
{
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
}
