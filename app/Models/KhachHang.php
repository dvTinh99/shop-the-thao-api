<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class KhachHang extends Model
{
    protected $table = 'tbkhachhang';
    protected $primaryKey = 'maKH';
    public $timestamps = false;



    protected $fillable = [
        'maKH',
        'tenKH',
        'email',
        'sdt',
        'matKhau',
        'diaChi',
        "code"
    ];
}
