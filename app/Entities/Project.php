<?php

namespace App\Entities;

use App\Repositories\ProjectNotesRepositoryEloquent;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'owner_id',
        'client_id',
        'name',
        'description',
        'progress',
        'status',
        'due_date',
    ];

    public function owner() {
        return $this->belongsTo(User::class);
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function notes(){

        return $this->hasMany(ProjectNote::class);
    }
}
