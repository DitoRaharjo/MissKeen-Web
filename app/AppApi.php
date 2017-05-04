<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppApi extends Model
{
  protected $table = 'app_api';

  protected $fillable = [
  'app_id',
  'api_id',
  'total_call',
  'created_at',
  'updated_at',
  'deleted_at',
  'created_by',
  'updated_by',
  'deleted_by',
  ];

  public function app() {
      return $this->belongsTo('App\UserApp', 'app_id');
  }

  public function api() {
      return $this->belongsTo('App\ApiMethod', 'api_id');
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
