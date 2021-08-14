<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\JsonResponse;

class TestController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Page::getContent("1.md"));
    }
}
