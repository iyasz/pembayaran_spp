<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;

    protected $table = "guru";
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }
}
