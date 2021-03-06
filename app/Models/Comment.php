<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model {
    use HasFactory;

    protected $table = 'comment';
    protected $guarded = array( 'id' );

    public function user() {
        return $this->belongsTo( 'App\Models\User' );
    }

    public static $rules = [
        'text' => 'required'
    ];
}
