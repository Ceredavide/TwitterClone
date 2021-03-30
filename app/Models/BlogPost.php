<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
