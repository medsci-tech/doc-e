<?php

namespace App\Http\Controllers\Article;

use App\Doce\Article\Article;
use App\Http\Requests\CreateArticleForm;
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

    public function store(CreateArticleForm $form)
    {
        $form->persist();

        return redirect()->back()->with([
            'success' => true
        ]);
    }
}
