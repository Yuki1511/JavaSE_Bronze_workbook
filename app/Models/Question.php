<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    use HasFactory;

    protected $primaryKey = 'question_num';

    public function answers()
    {
    return $this->hasMany(Answer::class,'question_num');
    }
}
