<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job' ;
    public $timestamps = false ;
    protected $fillable = ['name','active','description','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];


    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function getActive(){
        return   $this -> active == 1 ? 'مفعل'  : 'غير مفعل';
    }
    public function scopeSelection($query)
    {

        return $query->select('id','name','description','active');

    }

}
