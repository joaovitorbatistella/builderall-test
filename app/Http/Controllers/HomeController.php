<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {

        $user = 'João Vítor';

        return Inertia::render('Home', [
            'user' => $user
        ]);
    }

    public function about() {
        return Inertia::render('About');
    }
}
