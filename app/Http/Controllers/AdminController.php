<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function store()
    {
        $attributes = request()->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'failed'=>"Username or password are invalid."
            ]);
        }
        session()->regenerate();
        return redirect('/admin');
    }
    public function home()
    {

        return view('admin.home',[
            'lessons'=>Lesson::all()
        ]);
    }
    public function remove(Lesson $id)
    {
        Lesson::where('id',$id->id)->delete();
        return redirect('/admin');
    }
    public function createCategory()
    {
        return view('admin.create-category');
    }
    public function createLesson()
    {
        return view('admin.create-lesson');
    }
    public function storeCategory()
    {
        $attributes = request()->validate([
            'name'=>'required',
            'category_slug'=>['required', Rule::unique('categories', 'category_slug')],
        ]);
        Category::create($attributes);
        return redirect('/admin');
    }
    public function storeLesson()
    {
        $attributes = request()->validate([
            'title'=>'required',
            'lesson_slug'=>['required', Rule::unique('lessons', 'lesson_slug')],
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories', 'id')],
        ]);
        Lesson::create($attributes);
        return redirect('/admin');
    }
}
