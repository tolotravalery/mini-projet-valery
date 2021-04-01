<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'question'
    ];

    public function formpage()
    {
        return $this->belongsTo('App\Models\Formpage');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
