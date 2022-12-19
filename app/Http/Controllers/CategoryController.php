<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showCategories(Category $category)
    {
        $lessons = Lesson::where('category_id',$category->id)->get();
        return view('components.categories',[
            'category'=>$category,
            'lessons'=>$lessons,
        ]);
    }
}
