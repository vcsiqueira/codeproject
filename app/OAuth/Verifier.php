<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 12/08/15
 * Time: 10:59
 */

namespace App\OAuth;

use Illuminate\Support\Facades\Auth;


class Verifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

//        dd($credentials);

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }

}