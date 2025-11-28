<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

class PerformanceController extends Controller
{
public function index()
{
    $performances = Performance::all()->map(function($performance){
        $performance->image = $performance->image ? asset('storage/' . $performance->image) : null;
        return $performance;
    });

    return response()->json($performances);
}
}