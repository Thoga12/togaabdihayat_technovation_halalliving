<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulKursus extends Model
{
    use HasFactory;
    // app/Models/CourseModule.php
    protected $guarded = ['id','timestamps'];
    public function course()
    {
        return $this->belongsTo(Kursus::class);
    }

}
