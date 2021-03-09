<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    public static function blogs() {
        return blogs::orderBy('category')
            ->get();
    }

    public static function getBlogBySlug($slug) {
        return Projects::where('slug', $slug)
            ->first();
    }
}
