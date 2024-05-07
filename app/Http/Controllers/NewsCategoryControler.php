<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsCategoryControler extends Controller
{
    //    render index page
    public function index()
    {
        $news_categories = NewsCategory::all();
        return view('admin.newscategory.index', compact('news_categories'));
    }

    // render create page
    public function create()
    {
        return view('admin.newscategory.create');
    }

//    store category name
    public function store(Request $request)
    {
        $request->validate(
            [
                'category_name' => ['required'],
            ]);
        DB::beginTransaction();
        try{
            $news_category = new NewsCategory();
            $news_category->news_category = $request->category_name;
            $news_category->save();
        }
        catch(\Exception $e){
            DB::rollBack();
            toastr()->error('Error While Adding News Category');
            return redirect()->back();
        }
        DB::commit();
        toastr()->success('News Category Added Successfully');
        return redirect()->route('admin.news.category.index');
    }

    // render edit page
    public function edit($id)
    {
        $news_category = NewsCategory::where('category_id',$id)->first();
        return view('admin.newscategory.edit', compact('news_category'));
    }

    //   update news category
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'category_name' => ['required'],
            ]);

        DB::beginTransaction();
        try {
         NewsCategory::where('category_id',$id)->update(['news_category'=>$request->category_name]);
            // $news_category->news_category = $request->category_name;
            // $news_category->save();
        } catch (\Exception $e) {
            DB::rollBack();
            toastr()->error('Error While Updating News Category');
            return redirect()->back();
        }
        DB::commit();
        toastr()->success('News Category Updated Successfully');
        return redirect()->route('admin.news.category.index');
    }

    //    delete news category
    public function destroy($id)
    {
        try{
        NewsCategory::where('category_id',$id)->delete();
        }
        catch(\Exception $e){
            toastr()->error('Error While Deleting News Category');
            return redirect()->back();
        }
        toastr()->success('News Category Deleted Successfully');
        return back();
    }
}