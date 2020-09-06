<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'active', 'created_at','updated_at'
    ];

    protected $hidden = ['created_at','updated_at'] ;

    public $timestamps = false ;

    public  function subCategories(){
        return $this -> hasMany(Sub_Category::class,'category_id','id');
    }

    public function scopeSelection($query)
    {

        return $query->select('id','name','active');

    }
    public function getActive(){
        return   $this -> active == 1 ? 'مفعل'  : 'غير مفعل';
    }
}
