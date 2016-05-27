<?php


namespace App\Doce\Article;


use App\User;

/**
 * Class CreatesArticle
 * @package App\Doce\Article
 * @mixin User
 */
trait CreatesArticle
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}