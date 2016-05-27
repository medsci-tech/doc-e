<?php

namespace App\Doce;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tags
 * @package App\Doce
 * @mixin \Eloquent
 */
class Tags extends Model
{
    use SoftDeletes;
}
