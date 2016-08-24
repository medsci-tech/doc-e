<?php

namespace App\Http\Controllers\Article;

use App\Doce\Article\Category;
use App\Doce\Article\Article;
use App\Http\Requests\CreateArticleForm;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class ArticleController
 * @package App\Http\Controllers\Article
 */
class ArticleController extends Controller
{
    /**
     * ArticleController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 创建文章页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('article.create')->with([
            'categories' => Category::all()
        ]);
    }

    /**
     * 存储表单
     *
     * @param CreateArticleForm $form
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateArticleForm $form)
    {
        $form->persist();

//        return redirect()->back()->with([
//            'success' => true
//        ]);
    }
}
