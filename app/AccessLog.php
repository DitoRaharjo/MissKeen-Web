<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
  protected $table = 'access_log';

  protected $fillable = [
  'user_app_id',
  'path',
  'method',
  'created_at',
  'updated_at',
  ];

  public function userApp() {
    return $this->belongsTo('App\UserApp');
  }
}
