<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Class_;

class ClassesController extends Controller
{
    function index()
    {
        $i = 1;
        $classes = Classes::all();
        return view('admin.classes.index',compact('classes','i'));
    }

    function create()
    {
        return view('admin.classes.create');
    }

    function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'class_name'=>'required',
            ]);
            $class = new Classes();
            $class->class_name = $request->class_name;
            $class->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
        return redirect()->route('admin.classes.index');
    }

    function edit($id)
    {
        $class = Classes::where('class_id',$id)->first();

        return view('admin.classes.edit',compact('class'));
    }

    function update($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate([
                'class_name'=>'required',
            ]);
            Classes::where('class_id',$id)->update(['class_name' => $request->class_name]);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
        return redirect()->route('admin.classes.index');
    }

    function delete($id)
    {
        $class = Classes::find($id);
        $class->delete();
        return redirect()->back();
    }
}