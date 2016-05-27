<?php

namespace App\Http\Controllers\Article;

use App\Doce\Article\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        return Article::createUsingFormData($request->only([
            'title', 'abstract', 'thumbnail_url', 'category_id', 'keywords', 'tags', 'content'
        ]));
    }
}
