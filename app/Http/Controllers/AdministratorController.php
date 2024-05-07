<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
     // render index page
     public function index()
     {
         $teams = Administrator::all();
         return view('admin.administrator.index', compact('teams'));
     }
 
     // render create page
     public function create()
     {
         return view('admin.administrator.create');
     }
 
     // store administrator details
     public function store(Request $request)
     {
         $request->validate(
             [
                 'admin_name' => ['required'],
                 'admin_role' => ['required'],
                 'phone' => ['required'],
             ]);
 
         DB::beginTransaction();
         try {
             $store_team = new Administrator();
             $store_team->admin_name = $request->admin_name;
             $store_team->admin_role = $request->admin_role;
             $store_team->phone = $request->phone;

             $store_team->save();

         } catch (Exception $exception) {
             DB::rollBack();
            dd($exception);

             toastr()->error('Error While Adding Administrator');
             return back();
         }
         DB::commit();
         toastr()->success('Administrator Added Successfully');
         return redirect()->route('admin.administrator.index');
     }
 
     // render edit page
     public function edit($id)
     {
         $team = Administrator::findorfail($id);
         return view('admin.administrator.edit', compact('team'));
     }
 
     // update administrator details
     public function update(Request $request,  $id)
     {
         $request->validate(
             [
                'admin_name' => ['required'],
                'admin_role' => ['required'],
                'phone' => ['required'],
             ]
         );
         DB::beginTransaction();
         try {
             $edit_team = Administrator::findorfail($id);
             $edit_team->admin_name = $request->admin_name;
             $edit_team->admin_role = $request->admin_role;
             $edit_team->phone = $request->phone;
             $edit_team->update();
 
         } catch (Exception $exception) {
             DB::rollBack();
             toastr()->error('Error While Updating administrator');
             return back();
         }
         DB::commit();
         toastr()->success('administrator Updated Successfully');
         return redirect()->route('admin.administrator.index');
     }
 
     // delete
     public function delete($id)
     {
         try {
             $delete_team = Administrator::findorfail($id);
             $delete_team->delete();
         } catch (Exception $exception) {
             toastr()->error('Error While Deleting administrator');
             return back();
         }
         toastr()->success('administrator Deleted Successfully');
         return redirect()->back();
     }
 
     // view administrator details
     function view($id){
         $team = Administrator::findorfail($id);
         return view('admin.administrator.show',compact('team'));
     }
}
