<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Autorise de saisie les champs définis dans le tableau
    Protected $fillable = ['name', 'description', 'published_at'];

    protected $date = ['created_at', 'updated_at', 'published_at'];
    
    // autoriser de saisie toutes les champs de formaulaire
    //protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date);
    }
   
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }
}

