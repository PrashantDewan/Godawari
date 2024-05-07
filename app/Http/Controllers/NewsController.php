<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;



class NewsController extends Controller
{
    // render index page
    public function index()
    {
        $newses = DB::table('news')
        ->join('news_categories','news.news_category_id','=','news_categories.category_id')
        ->get();
        return view('admin.news.index', compact('newses'));
    }

    // render create page
    public function create()
    {
        $categories = NewsCategory::get();
        return view('admin.news.create', compact('categories'));
    }

    //    store news
    public function store(Request $request)
    {
        $request->validate(
            [
                'subject' => ['required'],
                'news_description' => ['required'],
                'date' => ['required'],
                'news_image' => ['required'],
                'news_category_id' => ['required'],
            ]);

        $image = $request->file('news_image');
        $imageName = time() . $image->getClientOriginalName();
        $image->move('public/admin/newsimage/', $imageName);

        DB::beginTransaction();
        try {
            $store_news = new News();
            $store_news->subject = $request->subject;
            $store_news->news_description = $request->news_description;
            $store_news->date = $request->date;
            $store_news->news_category_id = $request->news_category_id;
            $store_news->news_image = 'public/admin/newsimage/' . $imageName;
            $store_news->save();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Adding News');
            return back();
        }
        DB::commit();
        toastr()->success('News Added Successfully');
        return redirect()->route('admin.news.index');
    }

    // render edit page
    public function edit(Request $request, $id)
    {
        $news = News::findorfail($id);
        $categories = NewsCategory::get();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    //    update news
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'subject' => ['required'],
                'news_description' => ['required'],
                'date' => ['required'],
                'news_category_id' => ['required'],
            ]);

        $edit_news = News::findorfail($id);
        if ($image = $request->file('news_image')) {
            $imageName = time() . $image->getClientOriginalName();
            $image->move('public/image/newsimage/', $imageName);
            $edit_news->news_image = 'public/image/newsimage/' . $imageName;
        } else {
            $imageName = $edit_news->news_image;
        }

        DB::beginTransaction();
        try {
            $edit_news->subject = $request->subject;
            $edit_news->date = $request->date;
            $edit_news->news_description = $request->news_description;
            $edit_news->news_category_id = $request->news_category_id;
            $edit_news->update();
        } catch (Exception $exception) {
            DB::rollBack();
            toastr()->error('Error While Updating News');
            return back();
        }
        DB::commit();
        toastr()->success('News Updated Successfully');
        return redirect()->route('admin.news.index');
    }

    //   delete
    public function delete($id)
    {
       try
       {
            News::findorfail($id)->delete();
       }
       catch(Exception $e)
       {
            toastr()->error('Error While Deleting News');
            return back();
       }
       toastr()->success('News Deleted Successfully');
       return back();
    }

    // view news detail
    function view($id){

        $news = News::findorfail($id);
        return view('admin.news.show',compact('news'));
    }
}