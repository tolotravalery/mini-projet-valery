<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'forms';
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nom'
    ];

    public function respondents()
    {
        return $this->hasMany('App\Models\Respondent');
    }

    public function formpages()
    {
        return $this->hasMany('App\Models\Formpage');
    }
}
