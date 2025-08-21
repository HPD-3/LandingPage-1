<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $fillable = ['title', 'slug', 'image_path', 'description', 'content'];
}
