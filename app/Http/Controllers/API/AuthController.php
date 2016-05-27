<?php

namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => 'token']);
    }

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

    public function users(User $user)
    {
        return $user;
    }
}
