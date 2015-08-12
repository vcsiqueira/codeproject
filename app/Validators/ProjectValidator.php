<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 31/07/15
 * Time: 03:27
 */

namespace App\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id' => 'required|integer',
        'client_id' => 'required|integer',
        'name' => 'required',
//        'description' => 'required',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required|date',
    ];
}