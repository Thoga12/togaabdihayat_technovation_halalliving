<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZakatDonation extends Model
{
    use HasFactory;
    // app/Models/ZakatDonation.php
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
