<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;

    protected $fillable = ["imdbID","title","plot","poster"];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
