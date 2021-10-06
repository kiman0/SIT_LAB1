<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;

    public $timestamps = false;
  //  public $categories_id = false;
    protected $primaryKey = "id";

    /*
    public function mancategories()
    {
        return $this->belongsTo('App\Models\categories');
    }*/
}
