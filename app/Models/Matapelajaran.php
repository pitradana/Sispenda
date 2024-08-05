<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Matapelajaran extends Model
{
    use HasFactory;

    public function kelas(): BelongsTo
    {
        return $this->belongsTo('App\Models\Kelas');
    }

    public function guru(): BelongsTo
    {
        return $this->belongsTo('App\Models\Guru');
    }

    public function siswas(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Siswa')->withTimestamps();
    }
}
