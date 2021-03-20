<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function artpost(){
        return $this->belongsTo('App\Models\ArtPost','artwork_id');


    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
