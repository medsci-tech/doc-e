<?php

namespace App\Doce\Auth;

use App\User;

/**
 * Class HasAPIToken
 * @package App\Doce\Auth
 * @mixin User
 */
trait HasAPIToken
{
    /**
     * @return bool|int
     */
    public function updateAPIToken() {
        return $this->update(['api_token' => str_random(60)]);
    }

    /**
     * @return string
     */
    public function getAPIToken() {
        return $this->api_token;
    }
}