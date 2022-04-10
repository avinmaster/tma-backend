<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RepeatFrequencyType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function plans(): HasMany
    {
        return $this->hasMany(Plan::class);
    }
}
