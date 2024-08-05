<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Siswa extends Model
{
    use HasFactory;

    public function kelas(): BelongsTo
    {
        return $this->belongsTo('App\Models\Kelas');
    }

    public function ruangkelas(): BelongsTo
    {
        return $this->belongsTo('App\Models\RuangKelas');
    }

    public function matapelajarans(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Matapelajaran')->withTimestamps();
    }
}
