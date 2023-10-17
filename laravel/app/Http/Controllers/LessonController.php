<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        $lesson = response()->json(Lesson::all());
        return $lesson;
    }
    public function show()
    {
        $lesson = response()->json(Lesson::all());
        return $lesson;
    }
    public function destroy($id)
    {
        Lesson::find($id)->delete();
        return redirect('api/lesson/list');
    }

    public function store(Request $request)
    {
        $lesson = new Lesson();
        $lesson->status = $request->status;
        $lesson->subject_id = $request->subject_id;
        $lesson->user_id = $request->user_id;
        $lesson->save();
        return redirect('/lesson/list');
    }

    public function update(Request $request, $id)
    {
        $lesson = Lesson::find($id);
        $lesson->status = $request->status;
        $lesson->subject_id = $request->subject_id;
        $lesson->user_id = $request->user_id;
        $lesson->save();
        return redirect('/lesson/list');
    }

    public function listView(){
        $lesson = Lesson::all();
        return view('lesson.list', ['lesson'=>$lesson]);
    }
    public function newView()
    {
        $lesson = Lesson::all();
        return view('lesson.new', ['lesson' => $lesson]);
    }

}
