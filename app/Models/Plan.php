<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * Class Plan
 * @package App\Models
 */
class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function repeat_frequency_type(): BelongsTo
    {
        return $this->belongsTo(RepeatFrequencyType::class);
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function notes(): HasManyThrough
    {
        return $this->hasManyThrough(Note::class, Task::class);
    }
}
