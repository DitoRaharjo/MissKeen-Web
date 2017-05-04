<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserApp extends Model
{
  protected $table = 'user_app';

  protected $fillable = [
  'status',
  'category_id',
  'app_name'.
  'token',
  'token_secret',
  'rate_limit',
  'oauth',
  'app_website',
  'image',
  'created_at',
  'updated_at',
  'deleted_at',
  'created_by',
  'updated_by',
  'deleted_by',
  ];

  public function category() {
    return $this->belongsTo('App\Category', 'category_id');
  }

  public function api() {
      return $this->hasMany('App\AppApi', 'app_id');
  }

  public function createdBy() {
      return $this->belongsTo('App\User', 'created_by');
  }
  public function updatedBy() {
      return $this->belongsTo('App\User', 'updated_by');
  }
  public function deletedBy() {
      return $this->belongsTo('App\User', 'deleted_by');
  }
}
