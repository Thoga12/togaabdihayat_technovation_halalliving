<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KursusKuis extends Model
{
    use HasFactory;
    // app/Models/CourseQuiz.php
    protected $guarded = ['id','timestamps'];
    public function course()
    {
        return $this->belongsTo(Kursus::class);
    }


}
