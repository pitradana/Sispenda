<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ruangkelas extends Model
{
    use HasFactory;

    public function siswas(): HasMany
    {
        return $this->hasMany('App\Models\Siswa');
    }
    public function kelas(): BelongsTo
    {
        return $this->belongsTo('App\Models\Kelas');
    }
}
