<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CongViec extends Model
{
    use Notifiable;

    protected $table = 'congviec';

    public $fillable = [
        'id',
        'dich_vu',
        'nhom_id',
        'nhan_vien_id',
        'uu_tien',
        'lap_lai',
        'chu_thich',
        'file',
        'khach_hang_id',
        'khach_hang_chu_thich',
        'phan_tram_hoan_thanh',
        'trang_thai',
        'start_at',
        'end_date',
        'created_at',
    ];
}
