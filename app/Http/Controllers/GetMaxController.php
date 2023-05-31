<?php

namespace App\Http\Controllers;

use App\Models\GetMax;
use Illuminate\Http\Request;

class GetMaxController extends Controller
{
    public function index(Request $request)
    {
        $job = $request->get('job', '');
        $getMax = GetMax::query()
            ->where('job', '=', $job) 
            ->max('max');
            return response()->json($getMax);
    }
}
