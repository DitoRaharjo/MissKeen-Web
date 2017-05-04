<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
  protected $table = 'recipe_ingredient';

  protected $fillable = [
  'recipe_id',
  'ingredient_id',
  'unit_id',
  'amount',
  'description',
  'created_at',
  'updated_at',
  'deleted_at',
  'created_by',
  'updated_by',
  'deleted_by',
  ];

  public function ingredient() {
    return $this->belongsTo('App\Ingredient', 'ingredient_id');
  }

  public function recipe() {
    return $this->belongsTo('App\Recipe', 'recipe_id');
  }

  public function unit() {
    return $this->belongsTo('App\Unit', 'unit_id');
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
