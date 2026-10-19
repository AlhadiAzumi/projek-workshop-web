<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\JsonResponse;

class BukuApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Buku::all());
    }
}
