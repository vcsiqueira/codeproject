<?php
/**
 * Created by PhpStorm.
 * User: vcsiqueira
 * Date: 31/07/15
 * Time: 03:27
 */

namespace App\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules = [
        'project_id' => 'required|integer',
        'title' => 'required',
        'title' => 'required',
    ];
}