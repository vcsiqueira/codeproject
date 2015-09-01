<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProjectMembers extends Model
{
    protected $fillable = [
        'project_id',
        'member_id',
    ];

//    public function project() {
//        return $this->hasOne(Project::class);
//    }
//
//    public function member() {
//        return $this->hasOne(User::class);
//    }

}
