<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\QuoteService;

class QuoteController extends Controller
{
    public function index(QuoteService $quoteService)
    {
        $data = $quoteService->execute();
        return response()->json($data);
    }
}
