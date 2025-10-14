<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        $newsLetters = NewsLetter::latest()->paginate(10);
        return view('app.admin.news-letters.index', compact('newsLetters'));
    }
}
