<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
  protected $table = 'ingredients';

  protected $fillable = [
  'name',
  'created_at',
  'updated_at',
  'deleted_at',
  'created_by',
  'updated_by',
  'deleted_by',
  ];

  public function recipe() {
    return $this->hasMany('App\RecipeIngredient', 'ingredient_id');
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
