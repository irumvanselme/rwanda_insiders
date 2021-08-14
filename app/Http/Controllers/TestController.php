<?php

namespace App\Http\Controllers;

use App\Http\Classes\Page;
use App\Models\LocationAddress;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function index(): JsonResponse
    {
        $location = LocationAddress::query()->find(75);

        return response()->json($location->children);
    }
}
