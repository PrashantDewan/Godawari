<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Exception;

class FacultyController extends Controller
{
     //index page render function
     public function index()
     {
         $faculties = Faculty::all();
         return view('admin.faculty.index', compact('faculties'));
     }

    //create page render function
     public function create()
     {
         return view('admin.faculty.create');
     }

     //notice store fucntion
     public function store(Request $request)
     {
         $request->validate(
             [
                 'faculty_name' => ['required'],
                 'faculty_message' => ['required'],
                 'faculty_image' => ['required'],

             ]);
         if ($request->hasFile('faculty_image')) {
             $image = $request->file('faculty_image');
             $imageName = time() . $image->getClientOriginalName();
             $image->move('public/image/facultyimage/', $imageName);
         }
         DB::beginTransaction();
         try {
             $store_faculty = new Faculty();
             $store_faculty->faculty_name = $request->faculty_name;
             $store_faculty->faculty_position = $request->faculty_position;
             $store_faculty->faculty_message = $request->faculty_message;
             $store_faculty->faculty_image = 'public/image/facultyimage/' .$imageName;
             $store_faculty->save();
         } catch (Exception $exception) {
             DB::rollBack();
             toastr()->error('Error While Adding Faculty Message');
             return back();
         }
         DB::commit();
         toastr()->success('Faculty Message Added Successfully');
         return redirect()->route('admin.faculty.index');
     }

    //notice show page render function
     public function view($id)
     {
         $faculty = Faculty::findorfail($id);
         return view('admin.faculty.show', compact('faculty'));
     }

    //edit page render function
     public function edit($id)
     {
         $faculty = Faculty::findorfail($id);
         return view('admin.faculty.edit', compact('faculty'));
     }

     //notice update function
     public function update(Request $request, $id)
     {
         $request->validate(
             [
                 'faculty_name' => ['required'],
                 'faculty_message' => ['required'],
                 'faculty_position' => ['required'],
             ]);

         $edit_faculty = Faculty::find($id);
         if ($image = $request->file('faculty_image')) {
             $imageName = time() . $image->getClientOriginalName();
             $image->move('public/image/facultyimage/', $imageName);
             $edit_faculty->faculty_image = 'public/image/facultyimage/' . $imageName;

         } else {
             $imageName = $edit_faculty->faculty_image;
         }
         DB::beginTransaction();
         try {
             $edit_faculty->faculty_name = $request->faculty_name;
             $edit_faculty->faculty_position = $request->faculty_position;
             $edit_faculty->faculty_message = $request->faculty_message;
             $edit_faculty->update();
         } catch (\Exception $exception) {
             DB::rollBack();
             toastr()->error('Error While Updating Faculty Message');
             return back();
         }
         DB::commit();
         toastr()->success('Faculty Message Updated Successfully');
         return redirect()->route('admin.faculty.index');
     }

     //notice delete function
     public function delete($id)
     {
         try {
            Faculty::findorfail($id)->delete();
         } catch (\Exception $exception) {
             toastr()->error('Error While Deleting Faculty Message');
             return back();
         }
         toastr()->success('Faculty Message Deleted Successfully');
         return redirect()->back();
     }
}