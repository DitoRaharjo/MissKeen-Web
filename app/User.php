<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'email',
        'telp',
        'alamat',
        'image',
        'role_id',
        'password',
        'lupa_pass',
        'status',
        'registerdate',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
      return $this->belongsTo('App\Role', 'role_id');
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

    /*---------------------- User -------------------*/
    public function userCreated() {
        return $this->hasMany('App\User', 'created_by');
    }
    public function userUpdated() {
        return $this->hasMany('App\User', 'updated_by');
    }
    public function userDeleted() {
        return $this->hasMany('App\User', 'deleted_by');
    }
    /*---------------------- User -------------------*/

    /*---------------------- ApiMethod -------------------*/
    public function apiCreated() {
        return $this->hasMany('App\ApiMethod', 'created_by');
    }
    public function apiUpdated() {
        return $this->hasMany('App\ApiMethod', 'updated_by');
    }
    public function apiDeleted() {
        return $this->hasMany('App\ApiMethod', 'deleted_by');
    }
    /*---------------------- ApiMethod -------------------*/

    /*---------------------- AppApi -------------------*/
    public function appApiCreated() {
        return $this->hasMany('App\AppApi', 'created_by');
    }
    public function appApiUpdated() {
        return $this->hasMany('App\AppApi', 'updated_by');
    }
    public function appApiDeleted() {
        return $this->hasMany('App\AppApi', 'deleted_by');
    }
    /*---------------------- AppApi -------------------*/

    /*---------------------- UserApp -------------------*/
    public function userAppCreated() {
        return $this->hasMany('App\UserApp', 'created_by');
    }
    public function userAppUpdated() {
        return $this->hasMany('App\UserApp', 'updated_by');
    }
    public function userAppDeleted() {
        return $this->hasMany('App\UserApp', 'deleted_by');
    }
    /*---------------------- UserApp -------------------*/

    /*---------------------- Category -------------------*/
    public function categoryCreated() {
        return $this->hasMany('App\Category', 'created_by');
    }
    public function categoryUpdated() {
        return $this->hasMany('App\Category', 'updated_by');
    }
    public function categoryDeleted() {
        return $this->hasMany('App\Category', 'deleted_by');
    }
    /*---------------------- Category -------------------*/

    /*---------------------- Ingredient -------------------*/
    public function ingredientCreated() {
        return $this->hasMany('App\Ingredient', 'created_by');
    }
    public function ingredientUpdated() {
        return $this->hasMany('App\Ingredient', 'updated_by');
    }
    public function ingredientDeleted() {
        return $this->hasMany('App\Ingredient', 'deleted_by');
    }
    /*---------------------- Ingredient -------------------*/

    /*---------------------- RecipeIngredient -------------------*/
    public function recipeIngredientCreated() {
        return $this->hasMany('App\RecipeIngredient', 'created_by');
    }
    public function recipeIngredientUpdated() {
        return $this->hasMany('App\RecipeIngredient', 'updated_by');
    }
    public function recipeIngredientDeleted() {
        return $this->hasMany('App\RecipeIngredient', 'deleted_by');
    }
    /*---------------------- RecipeIngredient -------------------*/

    /*---------------------- Unit -------------------*/
    public function unitCreated() {
        return $this->hasMany('App\Unit', 'created_by');
    }
    public function unitUpdated() {
        return $this->hasMany('App\Unit', 'updated_by');
    }
    public function unitDeleted() {
        return $this->hasMany('App\Unit', 'deleted_by');
    }
    /*---------------------- Unit -------------------*/

    /*---------------------- Recipe -------------------*/
    public function recipeCreated() {
        return $this->hasMany('App\Recipe', 'created_by');
    }
    public function recipeUpdated() {
        return $this->hasMany('App\Recipe', 'updated_by');
    }
    public function recipeDeleted() {
        return $this->hasMany('App\Recipe', 'deleted_by');
    }
    /*---------------------- Recipe -------------------*/

    /*---------------------- Role -------------------*/
    public function roleCreated() {
        return $this->hasMany('App\Role', 'created_by');
    }
    public function roleUpdated() {
        return $this->hasMany('App\Role', 'updated_by');
    }
    public function roleDeleted() {
        return $this->hasMany('App\Role', 'deleted_by');
    }
    /*---------------------- Role -------------------*/
}
