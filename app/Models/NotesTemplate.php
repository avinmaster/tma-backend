<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotesTemplate extends Model
{
    use HasFactory;

    protected $fillable = ['text'];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
