<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('client.home', ['categories' => $categories]);
    }

    public function filter(Request $request)
    {
        $categories = Category::all();
        $category = Category::where('slug', $request->slug)->first();
        return view('client.book.index', ['categories' => $categories, 'category' => $category]);
    }
}
