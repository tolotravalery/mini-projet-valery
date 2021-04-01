<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'reponse'
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
}
