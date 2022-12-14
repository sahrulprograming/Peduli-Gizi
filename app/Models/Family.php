<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    // protected $with = ["foodRecord"];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function foodRecord(){
        return $this->hasMany(FoodRecord::class);
    }

    public function userNeed(){
        return $this->belongsTo(UserNeed::class);
    }
}