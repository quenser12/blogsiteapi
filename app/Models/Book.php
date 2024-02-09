<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    public function chapter():HasMany{
        return $this->hasMany(Chapter::class, 'chapter_id');
    }
    public function admin():BelongsTo{
        return $this->belongsTo(Admin::class, 'user_id');
    }
}
