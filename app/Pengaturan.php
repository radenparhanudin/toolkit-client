<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table    = 'pengaturan';
    protected $fillable = [
        'id', 'email', 'nama', 'jabatan', 'instansi', 'created_at', 'updated_at'
    ];
}
