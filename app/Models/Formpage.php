<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Formpage extends Model
{
    protected $table = 'formpages';
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nom'
    ];

    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }

    public function form()
    {
        return $this->belongsTo('App\Models\Form');
    }

}
