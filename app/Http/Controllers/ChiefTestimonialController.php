<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\ChiefTestimonial;
use Illuminate\Http\Request;
use Exception;


class ChiefTestimonialController extends Controller
{
//   index page render function
    public function index()
    {
        $testimonials = ChiefTestimonial::get();
        return view('admin.chiefTestimonial.index', compact('testimonials'));
    }

//    create page render function
    public function create()
    {
        return view('admin.chiefTestimonial.create');
    }

//   chief details store function
    public function store(Request $request)
    {
        $request->validate(
            [
                'chief_name' => ['required'],
                'chief_designation' => ['required'],
                'chief_testimonial' => ['required'],
                'chief_image' => ['required'],
            ] );

        $image = $request->file('chief_image');
        $imageName = time() . $image->getClientOriginalName();
        $image->move('public/image/chiefimage/', $imageName);

        DB::beginTransaction();
        try {
            $testimonial = new ChiefTestimonial();
            $testimonial->chief_name = $request->chief_name;
            $testimonial->chief_designation = $request->chief_designation;
            $testimonial->chief_testimonial = $request->chief_testimonial;
            $testimonial->chief_image = 'public/image/chiefimage/' . $imageName;
            $testimonial->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Testimonial');
            return redirect()->back();
        }
        DB::commit();
        toastr()->success('Testimonial Added Successfully');
        return redirect()->route('admin.testimonial.index');
    }

//  edit page render function
    public function edit($id)
    {
        $testimonial = ChiefTestimonial::findorfail($id);
        return view('admin.chiefTestimonial.edit', compact('testimonial'));
    }

//   chief details update function
    public function update(Request $request,  $id)
    {
        $request->validate(
            [
                'chief_name' => ['required'],
                'chief_designation' => ['required'],
                'chief_testimonial' => ['required']
            ] );

        DB::beginTransaction();
        try {
            $edit_testimonial = ChiefTestimonial::find($id);
            if ($image = $request->file('chief_image')) {
                $imageName = time() . $image->getClientOriginalName();
                $image->move('public/image/chiefimage/', $imageName);
                $edit_testimonial->chief_image = 'public/image/chiefimage/' . $imageName;
            }else {
                $imageName = $edit_testimonial->chief_image;
            }
            $edit_testimonial->chief_name = $request->chief_name;
            $edit_testimonial->Chief_designation = $request->chief_designation;
            $edit_testimonial->chief_testimonial = $request->chief_testimonial;
            $edit_testimonial->update();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Testimonial');
            return back();
        }
        DB::commit();
        toastr()->success('Testimonial Updated Successfully');
        return redirect()->route('admin.testimonial.index');
    }

//  delete function
    public function delete($id)
    {
        try {
            ChiefTestimonial::find($id)->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Testimonial');
            return back();
        }
        toastr()->success('Testimonial Deleted Successfully');
        return back();
    }

    // view chief details function
    function view($id){
        $testimonial = ChiefTestimonial::findorfail($id);
        return view('admin.chiefTestimonial.show',compact('testimonial'));
    }
}