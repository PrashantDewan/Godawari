<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Exception;
use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FeeController extends Controller
{
    // index page render function
    public function index()
    {
        $fees = DB::table('fees')
        ->join('classes','fees.classes_id','=','classes.class_id')
        ->get();
        return view('admin.feeStructure.index', compact('fees'));
    }

    // create page render function
    public function create()
    {
        $classes = Classes::all();
        return view('admin.feeStructure.create',compact('classes'));
    }

    // store fee function
    public function store(Request $request)
    {
        $request->validate(
            [
                'account_name' => ['required'],
                'period' => ['required'],
                'rate' => ['required'],
                'classes_id' => ['required'],
            ]);
        DB::beginTransaction();
        try {
            $store_fee = new Fee();
            $store_fee->account_name = $request->account_name;
            $store_fee->period = $request->period;
            $store_fee->rate = $request->rate;
            $store_fee->classes_id = $request->classes_id;
            $store_fee->save();

        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Fee');
            return back();
        }
        DB::commit();
        toastr()->success('Fee Added Successfully');
        return redirect()->route('admin.fee.index');
    }

    // render edit page function
    public function edit($id)
    {
        $fee = Fee::findorfail($id);
        $classes = Classes::all();

        return view('admin.feeStructure.edit', compact('fee','classes'));
    }

    // update fee function
    public function update(Request $request,  $id)
    {
        $request->validate(
            [
                'account_name' => ['required'],
                'period' => ['required'],
                'rate' => ['required'],
                'classes_id' => ['required'],
            ]);
        DB::beginTransaction();
        try {
            $edit_fee = Fee::find($id);
            $edit_fee->account_name = $request->account_name;
            $edit_fee->period = $request->period;
            $edit_fee->rate = $request->rate;
            $edit_fee->classes_id = $request->classes_id;
            $edit_fee->update();

        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Fee');
            return back();
        }
        DB::commit();
        toastr()->success('Fee Updated Successfully');
        return redirect()->route('admin.fee.index');
    }

    // delete funciton
    public function delete($id)
    {
        try {
            $delete_fee = Fee::findorfail($id);
            $delete_fee->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Fee');
            return back();
        }
        toastr()->success('Fee Deleted Successfully');
        return redirect()->back();
    }
}