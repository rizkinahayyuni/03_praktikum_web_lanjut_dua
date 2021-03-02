<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    public static function projects() {
        return Projects::orderBy('category')
            ->get();
    }

    public static function getProjectBySlug($slug) {
        return Projects::where('slug', $slug)
            ->first();
    }
}
