<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    public function content()
    {
        return $this->hasOne(Page::class);
    }

    public function child()
    {
        return $this->hasMany(Link::class, 'parent_id', 'id');
    }
}
