<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_time', 'duration', 'delay', 'completed'];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function plan(): BelongsTo
    {
        return $this->belongsTo(Plan::class);
    }

    public function subtasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function parentTasks(): BelongsTo
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
}
