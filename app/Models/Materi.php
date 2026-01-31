<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = ['judul', 'slug'];

    public function subMateris()
    {
        return $this->hasMany(SubMateri::class);
    }
}
