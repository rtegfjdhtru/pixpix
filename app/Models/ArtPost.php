<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtPost extends Model
{
    //テーブル名を入力
    protected $table = 'artpost';

    use HasFactory;
    //アクセスしてはダメなカラム
    protected $guarded = array('id');
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function likes(){
        return $this->belongsTo('App\Models\Likes','artwork_id');
    }
}
