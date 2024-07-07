<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KursusReview extends Model
{
    use HasFactory;
    // app/Models/CourseReview.php
    public function course()
    {
        return $this->belongsTo(Kursus::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
