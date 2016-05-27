<?php

namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AuthController
 * @package App\Http\Controllers\API
 */
class AuthController extends Controller
{
    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => 'token']);
    }

    /**
     * 此处验证用户的时候调用了SessionGuard的Auth::once()方法,
     * 但是并不会触发真正的session登陆, 只是用来验证权限。
     *
     * @param Request $request
     * @return User|null|Response
     */
    public function token(Request $request)
    {
        $credentials = $request->only([
            'username',
            'password'
        ]);

        if (Auth::once($credentials)) {
            $user = Auth::user();
            $user->updateAPIToken();
            return $user;
        }

        return response('Login failed.', Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @param User $user
     * @return User
     */
    public function users(User $user)
    {
        return $user;
    }
}
