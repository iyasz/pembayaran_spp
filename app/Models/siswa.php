<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class siswa extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = FALSE;
    protected $table = 'siswa';
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
