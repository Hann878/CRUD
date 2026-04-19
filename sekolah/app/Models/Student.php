<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Student extends Model
{
    protected $table = 'students';
    protected $guarded = [];
    
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
