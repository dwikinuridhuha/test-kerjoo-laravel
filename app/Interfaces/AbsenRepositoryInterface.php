<?php

namespace App\Interfaces;

interface AbsenRepositoryInterface
{
       public function getAllAbsens();
       public function getAbsenById($absenId);
       public function createAbsen($dataDetailAbsen);
}
