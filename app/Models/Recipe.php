<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Recipe extends Model
{
    use HasFactory;
/*
    public static function where($slug)
    {
        return DB::table('recipes_list')->where('slug',$slug);
    }*/

    public function user()
    {
        
    }
}
