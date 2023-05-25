<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    protected $guarded =[];
    // protected $fillable = [
    //     'id',
    //     'user_npm',
    //     'user_name',
    //     'user_prodi',
    //     'dospem',
    //     'nip',
    //     'nama_kegiatan',
    //     'prestasi_yg_dicapai' ,
    //     'waktu_perolehan',
    //     'tingkat',
    //     'jumlah_PT',
    //     'jumlah_peserta',
    //     'bukti',
    //     'diperoleh',
    //     'status',
    // ];
    // protected $fillable = [
    //    'user_npm','user_name', 'nama_kegiatan','user_prodi', 'waktu_perolehan', 'bukti', 'tingkat', 'prestasi_yg_dicapai', 'diperoleh'
    // ];
    protected $hidden = [
    
    ];
    public function user() {
        return $this->belongsTo(User::class, 'user_npm', 'npm');
    }

    public function details() {
        return $this->hasMany(Prestasi::class, 'id', 'id');
    }

    public function phones() {
        return $this->belongsTo(User::class);
    }

    public function tanggapans() {
    return $this->belongsTo(Prestasi::class, 'id', 'id');
    }

    public function tanggapan() {
    return $this->hasOne(Prestasi::class);
    }

    public function status() {
    return $this->belongsTo(Prestasi::class, 'status_id','status');
    }
}
