<?php

namespace App\Validators;

use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator{

    protected $rules = [
        'user_id' => 'required|integer',
        'client_id' => 'required|integer',
        'name' => 'required',
        'description' => 'required',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required',
    ];
    
}
