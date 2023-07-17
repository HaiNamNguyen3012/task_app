<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class KhachHang
{
    use Notifiable;

    protected $table = 'khachhang';

    public $fillable = [
        'id',
        'ten',
        'chu_thich',
    ];
}
