<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function project_skills()
    {
        return $this->hasMany('App\ProjectSkill');
    }
}
