<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";

    public $timestamps = FALSE;

    protected $guarded = [];
    
    
    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
    
}
