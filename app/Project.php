<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function language()
    {
        return $this->belongsTo('App\Language');
    }

    public function project_skills()
    {
        return $this->hasMany('App\ProjectSkill');
    }
}
