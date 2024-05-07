<?php

namespace App\Http\Controllers;

use App\Models\ManagementTeam;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;


class ManagementTeamController extends Controller
{
    // render index page
    public function index()
    {
        $teams = ManagementTeam::all();
        return view('admin.managementTeam.index', compact('teams'));
    }

    // render create page
    public function create()
    {
        return view('admin.managementTeam.create');
    }

    // store management team details
    public function store(Request $request)
    {
        $request->validate(
            [
                'team_name' => ['required'],
                'team_role' => ['required'],
            ]);

        DB::beginTransaction();
        try {
            $store_team = new ManagementTeam();
            $store_team->team_name = $request->team_name;
            $store_team->team_role = $request->team_role;
            $store_team->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Team');
            return back();
        }
        DB::commit();
        toastr()->success('Team Added Successfully');
        return redirect()->route('admin.team.index');
    }

    // render edit page
    public function edit($id)
    {
        $team = ManagementTeam::findorfail($id);
        return view('admin.managementTeam.edit', compact('team'));
    }

    // update management team details
    public function update(Request $request,  $id)
    {
        $request->validate(
            [
                'team_name' => ['required'],
                'team_role' => ['required'],
            ]
        );
        DB::beginTransaction();
        try {
            $edit_team = ManagementTeam::findorfail($id);
            $edit_team->team_name = $request->team_name;
            $edit_team->team_role = $request->team_role;
            $edit_team->update();

        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Team');
            return back();
        }
        DB::commit();
        toastr()->success('Team Updated Successfully');
        return redirect()->route('admin.team.index');
    }

    // delete
    public function delete($id)
    {
        try {
            $delete_team = ManagementTeam::findorfail($id);
            $delete_team->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting Team');
            return back();
        }
        toastr()->success('Team Deleted Successfully');
        return redirect()->back();
    }

    // view management team details
    function view($id){
        $team = ManagementTeam::findorfail($id);
        return view('admin.managementTeam.show',compact('team'));
    }
}