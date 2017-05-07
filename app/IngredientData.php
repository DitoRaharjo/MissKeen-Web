<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientData extends Model
{
    protected $table = 'ingredient_data';

    protected $fillable = [
    'recipe_id',
    'ingredient_id',
    'unit',
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
      return $this->belongsTo('App\Ingredient');
    }

    public function recipes() {
      return $this->belongsTo('App\Recipe');
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
