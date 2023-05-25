<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdeaAssignation extends Model
{
    use HasFactory;

    public function investor() {
        return $this->belongsTo(User::class, 'investor_id');
    }

    public function idea() {
        return $this->belongsTo(Idea::class, 'idea_id');
    }
}
