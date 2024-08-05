<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    public function gurus(): HasMany
    {
        return $this->hasMany('App\Models\Guru');
    }

    public function siswas(): HasMany
    {
        return $this->hasMany('App\Models\Siswa');
    }

    public function matapelajarans(): HasMany
    {
        return $this->hasMany('App\Models\MataPelajaran');
    }

    public function ruangkelass(): HasMany
    {
        return $this->hasMany('App\Models\RuangKelas');
    }
}
