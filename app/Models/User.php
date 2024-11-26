<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image_url',
    ];

    // Jika Anda ingin mengenkripsi password secara otomatis saat menyimpannya
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if ($user->isDirty('password')) {
                $user->password = bcrypt($user->password);
            }
        });
    }
}