<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guru extends Model
{
    use HasFactory;

    public function matapelajarans(): HasMany
    {
        return $this->hasMany('App\Models\Matapelajaran');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo('App\Models\Kelas');
    }
}
