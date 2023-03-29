<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

/**
 * takes an image url and checks weather 
 * it is available in local storage or 
 */
function setImage(string $imgUrl)
{
    if (Str::contains($imgUrl, 'uploads/')) {
        $imgUrl = asset('storage/' . $imgUrl);
    }
    return $imgUrl;
}

/**
 * Creates Unique Slug based on table records
 */
function slugFor(string $table, string $record): string
{
    $slug = str()->slug($record);
    $count  = DB::table($table)->where('slug', 'LIKE',  "%$slug%")->count();
    if ($count > 0) {
        $slug = $slug . '-' . $count++;
    }
    return $slug;
}
