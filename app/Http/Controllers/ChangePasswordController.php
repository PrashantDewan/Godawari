<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('admin.changepassword.changepassword');
    }

    //  Password update function 
    public function update(Request $request)
    {
        try {
            $user = auth()->user();
            if ((Hash::check($request->get('old_password'), Auth::user()->password))) {
                if (strcmp($request->get('new_password'), $request->get('confirm_password')) == 0) {
                    $change_password = User::where('id', $user->id)->first();
                    $change_password->password = Hash::make($request->new_password);
                    $change_password->update();
                    toastr()->success('Password Updated Successfully');
                }
            }
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Password');
            return back();
        }
        DB::commit();
        return redirect()->route('admin.password.index');
    }
}
