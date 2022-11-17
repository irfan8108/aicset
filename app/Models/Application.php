<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->hasOne(Payment::class, 'app_no', 'app_no');
    }
}
