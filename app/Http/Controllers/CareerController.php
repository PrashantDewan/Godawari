<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Support\Facades\DB;

use App\Models\Career;
use App\Models\CareerApplication;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    // career index page render function
    public function index()
    {
        $careers = Career::all();
        return view('admin.career.index', compact('careers'));
    }

// create page render  function
    public function create()
    {
        return view('admin.career.create');
    }

// career position store function
    public function store(Request $request)
    {
        $request->validate(
            [
                'position' => ['required'],
                'criteria' => ['required'],
                'date' => ['required'],
            ]);
        DB::beginTransaction();
        try {
            $store_career = new Career();
            $store_career->position = $request->position;
            $store_career->criteria = $request->criteria;
            $store_career->date = $request->date;
            $store_career->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Career');
            return back();
        }
        DB::commit();
        toastr()->success('Career Added Successfully');
        return redirect()->route('admin.career.index');
    }


// edit page render function
    public function edit($id)
    {
        $career = Career::where('career_id',$id)->first();
        return view('admin.career.edit', compact('career'));
    }

    // career position update function
    public function update(Request $request,  $id)
    {
        $request->validate(
            [
                'position' => ['required'],
                'criteria' => ['required'],
                'date' => ['required'],
            ]);
        DB::beginTransaction();
        try {
           Career::where('career_id',$id)->update([
            'position'=>$request->position,
            'criteria' => $request->criteria,
            'date' => $request->date
           ]);


        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Career');
            return back();
        }
        DB::commit();
        toastr()->success('Career Updated Successfully');
        return redirect()->route('admin.career.index');
    }

// delete function
    public function delete($id)
    {
        try {
          Career::where('career_id',$id)->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Career');
            return back();
        }
        toastr()->success('Career Deleted Successfully');
        return redirect()->back();
    }

    // submited career application page render function
    function careerApplication(){
    $applications= DB::table('career_applications')
    ->join('careers','career_applications.position_id','=','careers.career_id')
    ->get();
    return view('admin.application.index',compact('applications'));
    }

    // career application detail function
   function careerApplicationView($id)
   {
    dd($id);
    $view = CareerApplication::findorfail($id);
    return view('admin.application.view',compact('view'));
   }

//    application delete function
   function careerApplicationDelete($id)
    {
    CareerApplication::find($id)->delete();
    toastr()->success('Application Deleted Successfully');
    return redirect()->back();
    }
}