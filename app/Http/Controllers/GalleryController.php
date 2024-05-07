<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;



class GalleryController extends Controller
{
    //   index render function
    public function index()
    {
        $gallerys = Gallery::all();
        return view('admin.gallery.index', compact('gallerys'));
    }

    // create page render function
    public function create()
    {
        return view('admin.gallery.create');
    }

    // store gallery function
    public function store(Request $request)
    {
        $request->validate(
            [
                'gallery_name' => ['required'],
                'gallery_image' => ['required'],
            ]
        );
        if ($request->hasFile('gallery_image')) {
            $image = $request->file('gallery_image');
            $imageName = time() . $image->getClientOriginalName();
            $image->move('public/image/galleryimage/', $imageName);
        }
        DB::beginTransaction();
        try {

            $store_gallery = new Gallery();
            $store_gallery->gallery_name = $request->gallery_name;
            $store_gallery->gallery_image = 'public/image/galleryimage/' .$imageName;
            $store_gallery->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding Gallery');
            return back();
        }
        DB::commit();
        toastr()->success('Gallery Added Successfully');
        return redirect()->route('admin.gallery.index');
    }

    //    view gallery page function
    public function view(Gallery $gallery, $id)
    {
        $gallerys = Gallery::findorfail($id);
        return view('admin.gallery.show', compact('gallerys'));
    }

    // edit page render
    public function edit(Gallery $gallery, $id)
    {
        $gallerys = Gallery::findorfail($id);
        return view('admin.gallery.edit', compact('gallerys'));
    }

    // update gallery
    public function update(Request $request, Gallery $gallery, $id)
    {
        $request->validate(
            [
                'gallery_name' => ['required'],
            ] );

        $edit_gallery = Gallery::find($id);
        if ($image = $request->file('gallery_image')) {
            $imageName = time() . $image->getClientOriginalName();
            $image->move('public/image/galleryimage/', $imageName);
            $edit_gallery->gallery_image = 'public/image/galleryimage/' . $imageName;
        } else {
            $imageName = $edit_gallery->gallery_image;
        }
        DB::beginTransaction();
        try {
            $edit_gallery->gallery_name = $request->gallery_name;
            $edit_gallery->update();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating Gallery');
            return back();
        }
        DB::commit();
        toastr()->success('Gallery Updated Successfully');
        return redirect()->route('admin.gallery.index');
    }

    //  delete gallery
    public function delete(Gallery $gallery, $id)
    {
        try {
            Gallery::findorfail($id)->delete();
        } catch (\Exception $exception) {
            toastr()->error('Error While Deleting Gallery');
            return back();
        }
        toastr()->success('Gallery Deleted Successfully');
        return redirect()->back();
    }
}