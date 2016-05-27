<?php

namespace App\Doce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Article
 * @package App\Doce
 * @mixin \Eloquent
 */
class Article extends Model
{
    use SoftDeletes;
}
