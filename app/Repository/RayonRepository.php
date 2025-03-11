<?php

namespace App\Repository;

interface RayonRepository
{
    public function getAll();
    public function findById(int $id);
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
}
