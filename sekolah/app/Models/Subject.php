<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    use HasFactory;

    // Protect fillable agar mass assignment aman
    protected $fillable = [
        'subject_name',
    ];

}
