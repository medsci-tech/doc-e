<?php

namespace App\Doce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Keyword
 * @package App\Doce
 * @mixin \Eloquent
 */
class Keyword extends Model
{
    use SoftDeletes;
}
