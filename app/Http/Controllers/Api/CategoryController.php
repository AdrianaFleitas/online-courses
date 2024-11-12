<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function courses($id)
    {
        $category = Category::with('courses')->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => [
                'category' => $category->name,
                'courses' => $category->courses,
            ]
        ], 200);
    }
}
