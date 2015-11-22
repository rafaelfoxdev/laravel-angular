<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = [
        'user_id',
        'client_id',
        'name',
        'description',
        'progress',
        'status',
        'due_date',
    ];

    public function user() {
        return $this->belongsTo('App\Entities\User');
    }

    public function client() {
        return $this->belongsTo('App\Entities\Client');
    }

}
