<?php

namespace App\Models;

use App\Models\Prestasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'prestasi_id', 'tanggapan',
    ];

    protected $hidden = [
    
    ];

    public function prestasi()
    {
    	return $this->hasOne(Prestasi::class,'prestasi_id', 'id');
    }

    public function proses()
    {
    return $this->hasMany(Prestasi::class, 'status_id','status');
    }

    public function country() {
        return $this->hasOne(prestasi::class);
    }
}