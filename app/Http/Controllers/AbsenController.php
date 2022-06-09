<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Interfaces\AbsenRepositoryInterface;

class AbsenController extends Controller
{
    private AbsenRepositoryInterface $absenRepository;

    public function __construct(AbsenRepositoryInterface $absenRepository)
    {
        $this->absenRepository = $absenRepository;
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->absenRepository->getAllAbsens()
        ]);
    }

    public function store(Request $request): JsonResponse
    {
        $dataAbsenDetail = $request->only([
            'user_id',
            'tanggal',
            'alasan',
            'active'
        ]);

        return response()->json([
            'data' => $this->absenRepository->createAbsen($dataAbsenDetail)
        ], Response::HTTP_CREATED);
    }

    public function show(Request $request): JsonResponse
    {
        $absenId = $request->route('id');

        return response()->json([
            'data' => $this->absenRepository->getAbsenById($absenId)
        ]);
    }
}
