<?php

namespace App\Repository;

interface Repository
{
    public function store($data);
    public function update($data, $id);
}
