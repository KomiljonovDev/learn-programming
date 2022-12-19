<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    protected $guarded = [];
    protected $fillable = ['category_id'];
    public function index()
    {
        $lessons = DB::table('lessons')
            ->join('categories', 'lessons.category_id', '=', 'categories.id')
            ->get();
        $data = [];
        foreach ($lessons as $lesson) {
            $data[$lesson->id][] = $lesson;
        }
        return view('lesson.featured-lesson',[
            'lessons'=>$data
        ]);
    }
    public function showLesson(Lesson $lesson)
    {
        $lesson->view_count +=1;
        $lesson->save();
        return view('lesson.show-lesson',[
            'lesson'=>$lesson,
            'category'=>Category::find($lesson->category_id)
        ]);
    }
}
