<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
    }

    public function store()
    {
        return 'TBD';
    }
}
