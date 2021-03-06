<?php

namespace App\Models;

use Closure;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static whereHas(string $string, Closure $param)
 */
class Note extends Model
{
    use HasFactory;

    protected $fillable = ['text'];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
