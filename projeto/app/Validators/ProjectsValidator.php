<?php
/**
 * Created by PhpStorm.
 * User: josej_000
 * Date: 27/07/2015
 * Time: 22:02
 */

namespace project\Validators;


use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

class ProjectsValidator extends LaravelValidator
{
    protected $rules = [
            'owner_id' => 'required|integer',
            'client_id' => 'required|integer',
            'name' => 'required|email',
            'progress' => 'required',
            'status' => 'required',
            'due_date' => 'required'
    ];
}