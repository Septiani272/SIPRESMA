<?php

namespace App\Models;

use App\Models\Prestasi;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'npm',
        'name',
        'prodi',
        'jenis_kelamin',
        'phone',
        'password',
        'roles' ,
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
       
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_verified_at' => 'datetime',
    ];

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'user_npm', 'npm');
    }
    public function prestasis() {
    return $this->belongsTo(Transaction::class, 'id', 'id');
    }
}