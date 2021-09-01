<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    use HasFactory;
    protected $fillable = ['parent_id','title','link','order'];

    public function childs() {

        return $this->hasMany('App\Model\Admin\Menu','parent_id') ;

    }

}
