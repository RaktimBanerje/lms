<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Course extends Model
{
    use HasFactory;

    // use Sluggable;
    protected $table = "courses";

    protected $fillable = [
        "user_id",
        "thumbnail",
        "course_category_id",
        "course_type",
        "title",
        "sub_title",
        "slug",
        "description",
        "things_to_learn",
        "regular_price",
        "selling_price",
        "meta_title",
        "meta_description",
        "meta_keywords",
        "chapters",
        "instractors"
    ];

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }
}
