<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class NewsController extends Controller
{
    public function newsTable()
    {
        $data = News::paginate(1);
        return view('admin.news.news', compact('data'));
    }

    public function createNews()
    {
        return view('admin.news.createnews');
    }

    // save

    public function newsSave(Request $request)
    {


        $validatedData = $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'content' => ['required'],
        ]);


        $insert_data = new News;
        $insert_data->title = $request->title;
        $insert_data->description = $request->description;

        if ($request->hasFile('image')) {
            $validatedData = $request->validate([
                'image' => 'required|mimes:png,jpg',
            ]);

            $image = $request->file('image');
            $new_image = date('Y-md-d') . time() . "." . $image->extension();
            $destination_path = public_path('/images');
            $image->move($destination_path, $new_image);
            $insert_data->image = "images/" . $new_image;
        }
        $insert_data->content = $request->content;
        $insert_data->user_id = Auth::id();
        $insert_data->save();

        // return $insdata;
        return redirect('news')->with('success', 'News Table Created Successfully');
    }

    //  edit news

    public function editNews($id)
    {

        $edit_data = News::find($id);
        return view('admin.news.editnews', compact('edit_data'));
    }
    // update news

    public function updateNews(Request $request)
    {
        $updated_news = News::find($request->id);
        $updated_news->title = $request->title;
        $updated_news->description = $request->description;

        if ($request->hasFile('image')) {
            $validatedData = $request->validate([
                'image' => 'required|mimes:png,jpg',
            ]);

            $image = $request->file('image');
            $new_image = date('Y-md-d') . time() . "." . $image->extension();
            $destination_path = public_path('/images');
            $image->move($destination_path, $new_image);
            $updated_news->image = "images/" . $new_image;
        }
        $updated_news->content = $request->content;
        $updated_news->user_id = Auth::id();
        $updated_news->save();

        return redirect('news')->with('success', 'Updated successfully');
    }

    // delete news
    public function deleteNews($id)
    {
        $deleted_news = News::find($id);
        $deleted_news->delete();

        return redirect('news')->with('danger', 'Deleted successfully');
    }

    public function active($id)
    {
        $news_status = News::where('id', $id)->first();
        if ($news_status->status == 1) {
            $status = 0;
        }
        News::where('id', $id)->update(['status' => $status]);
        return back()->with('info', 'Status active successfully');
    }
    public function deactive($id)
    {
        $news_status = News::where('id', $id)->first();
        if ($news_status->status == 0) {
            $status = 1;
        }
        News::where('id', $id)->update(['status' => $status]);
        return back()->with('warning', 'Status Deactive successfully');
    }
}
