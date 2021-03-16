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
        return $this->belongsTo('App\Models\User');
    }
}
