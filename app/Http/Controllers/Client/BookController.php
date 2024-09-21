<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index (Request $request) {
        $list = $request->query('list');

        switch ($list) {
            case 'all':
                $books = Book::orderBy('created_at', 'desc')->paginate(10);
                break;
            
        }



        return view('client.book.index');
    }

    public function show () {
        return view('client.book.detail');
    }


    public function chapter () {
        return view('client.book.chapter');
    }
}
