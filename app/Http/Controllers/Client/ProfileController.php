<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('client.profile.index');
    }

    public function edit() {
        return view('client.profile.edit');
    }

    public function update(Request $request) {
        
    }

    public function changePassword() {  
        return view('client.profile.change-password');
    }
}
