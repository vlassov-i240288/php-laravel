<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $params = [
          'text' => 'Тут какой-то текст',
            'text2' => 'Тут какой-то текст 2'
        ];
        return view('admin.index', $params);
    }
}
