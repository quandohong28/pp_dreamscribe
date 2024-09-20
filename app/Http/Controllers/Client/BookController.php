<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function detail () {
        return view('client.book.detail');
    }

    public function chapter () {
        return view('client.book.chapter');
    }
}
