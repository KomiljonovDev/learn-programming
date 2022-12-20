<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $with = ['category'];

    public static function scopeFilter($query, $filters)
    {
        $query->when($filters['query'] ?? false, fn ($query, $search) => $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%')
        );

        $query->when($filters['category'] ?? false, fn ($query, $search) => $query->whereHas('category',fn ($query, $search) => $query->where('name', 'like', '%' . $search . '%')->orWhere('description', 'like', '%' . $search . '%'))
        );
    }
}
