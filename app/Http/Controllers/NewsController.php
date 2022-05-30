<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller {

    public function newsList()
    {
        return view('news', ['news'=>News::all()]);
    }

//    public function show(News $image)
//    {
//        return view('show', [
//            'newsItem' => $image
//        ]);
//    }
}
