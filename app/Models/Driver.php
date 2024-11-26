<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    // Specify the table name if it's different from 'drivers'
    protected $table = 'drivers';

    // Specify the fields that can be mass-assigned
    protected $fillable = ['name', 'email', 'phone', 'image_url'];
}
