<?php

namespace App\Http\Controllers\Home;

use App\Models\Options;
use App\Models\Pages;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function pages(Pages $slug)
    {
        $pages = Pages::all();
        return view('home.pages', compact('pages', 'slug'));
    }
}
