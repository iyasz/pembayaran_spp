<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    protected $table = "jurusan";
    protected $guarded = [];

    public function siswa()
    {
        return $this->hasMany(siswa::class);
    }
}
