<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Exception;
class TeacherController extends Controller
{

    // render index page
     public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index', compact('teachers'));
    }

    // render create page
    public function create()
    {
        return view('admin.teacher.create');
    }

    // store teacher details
    public function store(Request $request)
    {
        $request->validate(
            [
                'teacher_name' => ['required'],
                'subject' => ['required'],
            ]);

        DB::beginTransaction();
        try {
            $store_teacher = new Teacher();
            $store_teacher->teacher_name = $request->teacher_name;
            $store_teacher->subject = $request->subject;
            $store_teacher->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Teacher');
            return back();
        }
        DB::commit();
        toastr()->success('Teacher Added Successfully');
        return redirect()->route('admin.teacher.index');
    }

    // render edit page
    public function edit($id)
    {
        $teacher = Teacher::findorfail($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    // update teacher details
    public function update(Request $request,  $id)
    {
        $request->validate(
            [
                'teacher_name' => ['required'],
                'subject' => ['required'],
            ]);

        DB::beginTransaction();
        try {
            $edit_teacher = Teacher::findorfail($id);

            $edit_teacher->teacher_name = $request->teacher_name;
            $edit_teacher->subject = $request->subject;
            $edit_teacher->update();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Teacher');
            return back();
        }
        DB::commit();
        toastr()->success('Teacher Updated Successfully');
        return redirect()->route('admin.teacher.index');
    }

    // delete teacher
    public function delete($id)
    {
        try {
            $delete_teacher = Teacher::findorfail($id);
            $delete_teacher->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Teacher');
            return back();
        }
        toastr()->success('Teacher Deleted Successfully');
        return redirect()->back();
    }


}