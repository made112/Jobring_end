<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category ;
class Sub_Category extends Model
{
    protected $table = 'sub_categories';
    protected $fillable = [
        'name', 'created_at','updated_at','category_id'
    ];

    protected $hidden = ['created_at','updated_at'] ;

    public $timestamps = false ;

    public  function Category(){
        return $this -> belongsTo(Category::class,'category_id','id');
    }
    public function scopeSelection($query)
    {

        return $query->select('id','name','category_id');

    }
}
