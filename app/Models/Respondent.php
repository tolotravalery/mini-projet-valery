<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    protected $table = 'respondents';
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'status'
    ];

    public function form()
    {
        return $this->belongsTo('App\Models\Form');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer');
    }
}
