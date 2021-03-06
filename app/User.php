<?php

namespace App;

use App\Doce\Article\CreatesArticle;
use App\Doce\Auth\HasAPIToken;
use App\Doce\Permission\HasPermission;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * @package App
 * @mixin \Eloquent
 */
class User extends Authenticatable
{

    use HasPermission;
    use HasAPIToken;
    use SoftDeletes;
    use CreatesArticle;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

}
