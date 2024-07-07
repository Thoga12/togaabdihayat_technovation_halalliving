<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $guarded = ['id','timestamps'];
    // app/Models/Course.php

    // public function instruktur()
    // {
    //     return $this->belongsTo(User::class, 'instruktur_id');
    // }

    public function users()
    {
        return $this->belongsToMany(User::class, 'kursus_user');
    }
    public function modules()
    {
        return $this->hasMany(ModulKursus::class);
    }

    public function quizzes()
    {
        return $this->hasMany(KursusKuis::class);
    }

    public function reviews()
    {
        return $this->hasMany(KursusReview::class);
    }

}
