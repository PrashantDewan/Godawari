<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Exception;
use App\Models\CareerApplication;
use Illuminate\Http\Request;

class CareerApplicationController extends Controller
{
    //career applicaition store function
    function careerApplication(Request $request){
        $request->validate(
            [
                'name' => ['required'],
                'cv' => ['required'],
                'description' => ['required'],
                'position_id' => ['required'],
            ]
        );
        $file = $request->file('cv');
        $fileName = time() . $file->getClientOriginalName();
        $file->move('public/image/careerApplication/', $fileName);

        DB::beginTransaction();
        try {
            $store_application = new CareerApplication();
            $store_application->name = $request->name;
            $store_application->cv = 'publiimage/careerApplication/' . $fileName;
            $store_application->description = $request->description;
            $store_application->position_id = $request->position_id;
            $store_application->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Application');
            return back();
        }
        DB::commit();
        toastr()->success('Application Added Successfully');
        return back();
    }
}
