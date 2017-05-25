<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  protected $table = 'recipes';

  protected $fillable = [
  'name',
  'description',
  'procedure',
  'portion',
  'like',
  'rating',
  'image',
  'totalCalory',
  'totalPrice',
  'created_at',
  'updated_at',
  'deleted_at',
  'created_by',
  'updated_by',
  'deleted_by',
  ];

  public function ingredientData() {
    return $this->hasMany('App\IngredientData');
  }

  public function ingredients() {
    return $this->belongsToMany('App\Ingredient');
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
