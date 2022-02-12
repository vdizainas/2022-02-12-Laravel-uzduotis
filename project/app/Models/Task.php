<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function taskTaskStatuses() {
        return $this->belongsTo(TaskStatus::class, 'status_id', 'id');        
    }

}
