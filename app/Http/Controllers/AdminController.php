<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
}
