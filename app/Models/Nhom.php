<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Nhom extends  Model
{
    use Notifiable;

    protected $table = 'nhom';

    public $fillable = [
        'id',
        'ma',
        'ten',
    ];
}
