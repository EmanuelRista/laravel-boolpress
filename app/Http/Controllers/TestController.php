<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function logged()
    {
        if (!Auth::check()) {
            return view('auth.login');
        }

        $user = Auth::user();
        return view('manage', compact('user'));
    }

    public function guest()
    {

        return 'Here the posts';
    }

}
