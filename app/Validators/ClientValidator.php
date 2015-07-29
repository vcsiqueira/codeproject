<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 28/07/15
 * Time: 16:23
 */

namespace App\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{

    protected $rules = [
        'name'=> 'required|max:255',
        'responsible'=> 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',

        ];
}