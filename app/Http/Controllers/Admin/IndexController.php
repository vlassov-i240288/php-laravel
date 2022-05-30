<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
//        return view('admin.index', ['news'=>News::all()]);
        $news = News::all();
        return view('admin.index', ['news'=>$news]);
    }

//    public function add(Request $request)
//    {
//        if($request->isMethod('post')) {
//            $request->flash();
//            return redirect()->route('addNews');
//        }
//    }
//
//    public function update(Request $request, News $news)
//    {
//        dump($news);
//    }
//
//    public function delete(News $news)
//    {
//        dump($news);
//    }
}
