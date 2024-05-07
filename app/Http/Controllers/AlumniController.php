<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class AlumniController extends Controller
{
// index page render function
    public function index()
    {
        $alumnis = Alumni::get();
        return view('admin.alumni.index', compact('alumnis'));
    }

// create page render funciton
    public function create()
    {
        return view('admin.alumni.create');
    }

// store function of alumni
    public function store(Request $request)
    {
        $request->validate(
            [
                'alumni_name' => ['required'],
                'batch' => ['required'],
                'alumni_testimonial' => ['required'],
                'alumni_image' => ['required'],
            ]
        );
        $image = $request->file('alumni_image');
        $imageName = time() . $image->getClientOriginalName();
        $image->move('public/image/alumniimage/', $imageName);
        DB::beginTransaction();
        try {
            $alumni = new Alumni();
            $alumni->alumni_name = $request->alumni_name;
            $alumni->batch = $request->batch;
            $alumni->alumni_testimonial = $request->alumni_testimonial;
            $alumni->alumni_image = 'public/image/alumniimage/' . $imageName;
            $alumni->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Creating Alumni');
            return back();
        }
        DB::commit();
        toastr()->success('Alumni Created Successfully');
        return redirect()->route('admin.alumni.index');
    }

// edit page render function
    public function edit($id)
    {
        $alumni = Alumni::findorfail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }

// update alumni function
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'alumni_name' => ['required'],
                'batch' => ['required'],
                'alumni_testimonial' => ['required']
            ]
        );
        DB::beginTransaction();
        try {
            $edit_alumni = Alumni::find($id);
            if ($image = $request->file('alumni_image')) {
                $imageName = time() . $image->getClientOriginalName();
                $image->move('public/image/newsimage/', $imageName);
                $edit_alumni->alumni_image = 'public/image/newsimage/' . $imageName;
            } else {
                $imageName = $edit_alumni->alumni_image;
            }
            $edit_alumni->alumni_name = $request->alumni_name;
            $edit_alumni->batch = $request->batch;
            $edit_alumni->update();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Alumni');
            return back();
        }
        DB::commit();
        toastr()->success('Alumni Updated Successfully');
        return redirect()->route('admin.alumni.index');
    }

//  delete function
    public function delete($id)
    {
        try {
            $alumni = Alumni::findorfail($id);
            $alumni->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Alumni');
            return back();
        }
        toastr()->success('Alumni Deleted Successfully');
        return back();
    }
}