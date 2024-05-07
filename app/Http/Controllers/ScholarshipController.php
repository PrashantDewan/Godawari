<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScholarshipController extends Controller
{

    // render index page
    public function index()
    {
        $scholarship = Scholarship::get();
        return view('admin.scholarship.index',compact('scholarship'));
    }

    // render create page
    public function create()
    {
        return view('admin.scholarship.create');

    }

    // store scholarship
    public function store(Request $request)
    {
        $request->validate(
            [
                'details' => ['required'],
                'scholarship' => ['required'],
            ]);
        DB::beginTransaction();
        try{
            $scholarship = new Scholarship();
            $scholarship->details= $request->details;
            $scholarship->scholarship= $request->scholarship;
            $scholarship->save();
        }
        catch(\Exception $e){
            DB::rollBack();
            toastr()->error('Error While Adding Scholarship');
            return redirect()->back();
        }
        DB::commit();
        toastr()->success('Scholarship Added Successfully');
        return redirect()->route('admin.scholarship.index');
    }

    // render edit page
    public function edit(Scholarship $scholarship, $id)
    {
        $scholarship = Scholarship::findorfail($id);
        return view('admin.scholarship.edit', compact('scholarship'));
    }

    // update scholarship
    public function update(Request $request, Scholarship $scholarship,$id)
    {
        $request->validate(
            [
                'details' => ['required'],
                'scholarship' => ['required'],
            ]);

        DB::beginTransaction();
        try {
            $scholarship = Scholarship::findorfail($id);
            $scholarship->details = $request->details;
            $scholarship->scholarship = $request->scholarship;
            $scholarship->save();
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error('Error While Updating Scholarship');
            return redirect()->back();
        }
        DB::commit();
        toastr()->success('Scholarship Updated Successfully');
        return redirect()->route('admin.scholarship.index');
    }

    // delete scholarship
    public function destroy(Scholarship $scholarship, $id)
    {
        try{
            $scholarship = Scholarship::findorfail($id);
            $scholarship->delete();
        }
        catch(\Exception $e){
            toastr()->error('Error While Deleting Scholarship');
            return redirect()->back();
        }
        toastr()->success('Scholarship Deleted Successfully');
        return back();
    }
}