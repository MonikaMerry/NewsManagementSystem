<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function listNews()
    {
        $news_data = News::where('status', 0)->paginate(6);
        return view('welcome', compact('news_data'));
    }

    public function newsDetail($id)
    {
        $news_details = News::where('id', $id)->first();
        return view('admin.home.newsdetail', compact('news_details'));
        // return $newsdetails;
    }

    public function view()
    {
        $news_data = News::where('status', 0)->paginate(6);
        return view('admin.home.home', compact('news_data'));
    }
}
