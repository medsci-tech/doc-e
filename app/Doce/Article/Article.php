<?php

namespace App\Doce\Article;

use App\App\Doce\Article\Category;
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
     * @param array $plain_data
     * @param array $keywords
     * @param array $tags
     * @param User $user
     * @return Article|mixed|null
     */
    public static function createUsingCredentials($plain_data, $keywords, $tags, $user = null)
    {
        return \DB::transaction(function () use ($plain_data, $keywords, $tags, $user) {
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

            $user = $user ? $user : \Auth::user();
            $article->update(['creator_id' => $user->id]);
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * @param array $credentials
     * @return Article|null|mixed
     */
    public static function createUsingFormData(array $credentials)
    {
        $plain_data = collect($credentials)->only(['title', 'abstract', 'thumbnail_url', 'content', 'category_id'])->toArray();
        $keywords = explode(',', $credentials['keywords']);
        $tags = explode(',', $credentials['tags']);

        $article = self::createUsingCredentials($plain_data, $keywords, $tags);

        return $article;
    }
}
