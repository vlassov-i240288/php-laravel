<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $categories = DB::select('SELECT id, title, description, image FROM categories');
//        return view('home', compact('categories'));
        return view('home', ['categories'=>Categories::all()]);
    }
}
