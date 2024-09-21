<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $allBooks = Book::paginate(20);

        $hotBooks = Book::where('is_hot', 1)->limit(20)->get();

        $freeBooks = Book::where('price', 0)->limit(6)->get();

        $vipBooks = Book::where('price', '>', 0)->limit(6)->get();

        return view('client.home', [
            'allBooks' => $allBooks,
            'categories' => $categories,
            'hotBooks' => $hotBooks,
            'freeBooks' => $freeBooks,
            'vipBooks' => $vipBooks
        ]);
    }

    public function filter(Request $request)
    {
        $categories = Category::all();
        $category = Category::where('slug', $request->slug)->first();
        return view('client.book.index', ['categories' => $categories, 'category' => $category]);
    }
}
