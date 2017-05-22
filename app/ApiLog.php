<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiLog extends Model
{
    protected $table = 'api_log';

    protected $fillable = [
    'user_app_id',
    'test',
    'user',
    'recipe',
    'ingredient',
    'created_at',
    'updated_at',
    ];

    public function userApp() {
      return $this->belongsTo('App\UserApp');
    }
}
