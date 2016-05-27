<?php

namespace App\Doce\Article;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Doce\Article
 * @mixin \Eloquent
 */
class Article extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    /**
     * @param $plain_data
     * @param $keywords
     * @param $tags
     * @return Article|null|mixed
     */
    public static function createUsingCredentials($plain_data, $keywords, $tags)
    {
        return \DB::transaction(function () use ($plain_data, $keywords, $tags) {
            $article = self::create($plain_data);

            foreach ($keywords as $keyword_name) {
                $keyword = new Keyword();
                $keyword->name = $keyword_name;
                $article->keywords()->save($keyword);
            }

            foreach ($tags as $tag_name) {
                $tag = new Tag();
                $tag->name = $tag_name;
                $article->tags()->save($tag);
            }

            return $article;
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }


    /**
     * @param array $credentials
     * @return Article|null|mixed
     */
    public static function createUsingFormData(array $credentials)
    {
        $plain_data = collect($credentials)->only(['title', 'abstract', 'thumbnail_url', 'content'])->toArray();
        $keywords = $credentials['keywords'];
        $tags = $credentials['tags'];

        $article = self::createUsingCredentials($plain_data, $keywords, $tags);

        return $article;
    }
}
