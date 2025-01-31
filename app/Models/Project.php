<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Developer;

class Project extends Model
{
    use HasFactory;
    public function projects(){
        return $this->belongsToMany(Developer::class)->withPivot('role')->withTimestamp();
    }
}
