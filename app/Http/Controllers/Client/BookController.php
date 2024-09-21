<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Chapter;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $books = Book::paginate(20);

        $list = $request->query('list');
        $category = $request->query('category');
        $search = $request->query('search');

        switch ($list) {
            case 'all':
                $books = Book::paginate(12);
                break;

            case 'hot':
                $books = Book::where('is_hot', 1)->paginate(12);
                break;

            case 'new':
                $books = Book::orderBy('id', 'desc')->paginate(12);
                break;

            case 'full':
                $books = Book::where('is_completed', 1)->paginate(12);
                break;

            case 'free':
                $books = Book::where('price', 0)->paginate(12);
                break;

            case 'vip':
                $books = Book::where('price', '>', 0)->paginate(12);
                break;
            default:
                $books = Book::paginate(12);
                break;
        }

        if ($category) {
            $books = Book::where('category_id', $category)->paginate(12);
        }

        if ($search) {
            $books = Book::where('title', 'like', "%$search%")->paginate(12);
        }

        return view('client.book.index', [
            'categories' => $categories,
            'books' => $books,
        ]);
    }

    public function show($slug)
    {
        $categories = Category::all();

        $book = Book::where('slug', $slug)->first();

        return view('client.book.detail', [
            'categories' => $categories,
            'book' => $book,
        ]);
    }

    public function read($slug, $chapter)
    {
        $book = Book::where('slug', $slug)->first();
        $chapter = Chapter::where('slug', $chapter)->first();  

        return view('shared.book.read', [
            'book' => $book,
            'chapter' => $chapter,
        ]);
    }
}
