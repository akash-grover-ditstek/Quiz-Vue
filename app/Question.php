<?php

namespace App;

use App\User;
use App\Answer;
use Illuminate\Database\Eloquent\Model;
//use Symfony\Component\Console\Answer\Answer;

class Question extends Model
{
    protected $fillable=[
        'title','user_id','page','type','points','quiz_id'
    ];

    public function answer(){
        return $this->hasMany(Answer::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'id');
    }

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

}
