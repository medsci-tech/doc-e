<?php

namespace App\Http\Requests;

use App\Doce\Article\Article;
use App\Http\Requests\Request;

class CreateArticleForm extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'abstract' => 'required',
//            'thumbnail_url' => 'required',
//            'category_id' => 'required',
            'content' => 'required'
        ];
    }

    public function persist()
    {
        return Article::createUsingFormData($this->only('title', 'abstract', 'thumbnail_url', 'category_id', 'keywords', 'tags', 'content'));
    }
}
