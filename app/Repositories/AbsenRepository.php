<?php

namespace App\Repositories;

use App\Interfaces\AbsenRepositoryInterface;
use App\Models\Absen;

class AbsenRepository implements AbsenRepositoryInterface
{

    public function getAllAbsens()
    {
        // TODO: Implement getAllAbsens() method.
        return Absen::all();
    }

    public function getAbsenById($absenId)
    {
        // TODO: Implement getAbsenById() method.
        return Absen::findOrFail($absenId);
    }

    public function createAbsen($dataDetailAbsen)
    {
        // TODO: Implement createAbsen() method.
        return Absen::create($dataDetailAbsen);
    }
}
