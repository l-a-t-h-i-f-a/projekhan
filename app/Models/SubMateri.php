<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMateri extends Model
{
    protected $fillable = ['materi_id', 'judul', 'slug'];

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}

