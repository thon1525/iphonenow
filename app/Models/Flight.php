<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'tablenew';
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
