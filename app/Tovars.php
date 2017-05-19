<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Tovars extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'tovars';
    
    protected $fillable = [
          'name',
          'body',
		  'price',
          'picture',
          'showhide',
          'categories_id',
          'user_id'
    ];
    
    public static $showhide = ["show" => "show", "hide" => "hide"];


    public static function boot()
    {
        parent::boot();

        Tovars::observe(new UserActionsObserver);
    }
    
    public function categories()
    {
        return $this->hasOne('App\Categories', 'id', 'categories_id');
    }


    public function users()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    
    
}