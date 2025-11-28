<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

class NomineeController extends Controller
{
public function byCategory($category_id)
{
    $nominees = Nominee::where('category_id', $category_id)->get()->map(function($nominee){
        $nominee->image = $nominee->image ? asset('storage/' . $nominee->image) : null;
        return $nominee;
    });

    return response()->json($nominees);
}
}