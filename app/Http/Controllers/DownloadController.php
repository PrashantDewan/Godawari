<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Download;
use Illuminate\Http\Request;
use Exception;


class DownloadController extends Controller
{
//  index page render function
    public function index()
    {
        $files = Download::get();
        return view('admin.download.index', compact('files'));
    }

//  create page render function
    public function create()
    {
        return view('admin.download.create');
    }

// store file function
    public function store(Request $request)
    {
        $request->validate(
            [
                'file_name' => ['required'],
                'file' => ['required'],
            ]);
        $file = $request->file('file');
        $fileName = time() . $file->getClientOriginalName();
        $file->move('public/image/download/', $fileName);

        DB::beginTransaction();
        try {
            $download_file = new Download();
            $download_file->file_name = $request->file_name;
            $download_file->file = 'public/image/download/' . $fileName;
            $download_file->save();

        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Creating File');
            return back();
        }
        DB::commit();
        toastr()->success('File Created Successfully');
        return redirect()->route('admin.download.index');
    }

//  edit page render function
    public function edit(Download $download, $id)
    {
        $files = Download::findorfail($id);
        return view('admin.download.edit', compact('files'));
    }

//  update file function
    public function update(Request $request, Download $download, $id)
    {
        $request->validate(
            [
                'file_name' => ['required'],
            ]);
        DB::beginTransaction();
        try {
            $edit_file = Download::find($id);
            if ($file = $request->file('file')) {
                $fileName = time() . $file->getClientOriginalName();
                $file->move('public/image/download/', $fileName);
                $edit_file->file = 'public/image/download/' . $fileName;
            } else {
                $fileName = $edit_file->file;
            }
            $edit_file->file_name = $request->file_name;
            $edit_file->update();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating File');
            return back();
        }
        DB::commit();
        toastr()->success('File Updated Successfully');
        return redirect()->route('admin.download.index');
    }

//    delete function
    public function delete(Download $download, $id)
    {
        try {
            $download = Download::findorfail($id);
            $download->delete();
        } catch (Exception $exception) {
            toastr()->error('Error While Deleting File');
            return back();
        }
        toastr()->success('File Deleted Successfully');
        return back();
    }
}