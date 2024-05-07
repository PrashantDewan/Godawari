<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

class NoticeController extends Controller
{
   //index page render function
    public function index()
    {
        $notices = Notice::all();
        return view('admin.notice.index', compact('notices'));
    }

   //create page render function
    public function create()
    {
        return view('admin.notice.create');
    }

    //notice store fucntion
    public function store(Request $request)
    {
        $request->validate(
            [
                'subject' => ['required'],
                'notice_description' => ['required'],
                'notice_image' => ['required'],
            ]);
        if ($request->hasFile('notice_image')) {
            $image = $request->file('notice_image');
            $imageName = time() . $image->getClientOriginalName();
            $image->move('public/image/noticeimage/', $imageName);
        }
        DB::beginTransaction();
        try {
            $store_notice = new Notice();
            $store_notice->subject = $request->subject;
            $store_notice->notice_description = $request->notice_description;
            $store_notice->notice_image = 'public/image/noticeimage/' .$imageName;
            $store_notice->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Notice');
            return back();
        }
        DB::commit();
        toastr()->success('Notice Added Successfully');
        return redirect()->route('admin.notice.index');
    }

   //notice show page render function
    public function view($id)
    {
        $notice = Notice::findorfail($id);
        return view('admin.notice.show', compact('notice'));
    }

   //edit page render function
    public function edit($id)
    {
        $notice = Notice::findorfail($id);
        return view('admin.notice.edit', compact('notice'));
    }

    //notice update function
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'subject' => ['required'],
                'notice_description' => ['required'],

            ] );
        $edit_notice = Notice::find($id);
        if ($image = $request->file('notice_image')) {
            $imageName = time() . $image->getClientOriginalName();
            $image->move('public/image/noticeimage/', $imageName);
            $edit_notice->notice_image = 'public/image/noticeimage/' . $imageName;

        } else {
            $imageName = $edit_notice->notice_image;
        }
        DB::beginTransaction();
        try {
            $edit_notice->subject = $request->subject;
            $edit_notice->notice_description = $request->notice_description;
            $edit_notice->update();
        } catch (\Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Notice');
            return back();
        }
        DB::commit();
        toastr()->success('Notice Updated Successfully');
        return redirect()->route('admin.notice.index');
    }

    //notice delete function
    public function delete($id)
    {
        try {
            Notice::findorfail($id)->delete();
        } catch (\Exception $exception) {
            toastr()->error('Error While Deleting Notice');
            return back();
        }
        toastr()->success('Notice Deleted Successfully');
        return redirect()->back();
    }
}
