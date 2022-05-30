<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AddNewsController extends Controller
{
    public function addNews()
    {
        return view('formAddNews');
    }

    public function add(Request $request)
    {
        $validated = $request->only(['title', 'inform']);
        $news = new News($validated);

        if($news->save()) {
            return redirect()->route('admin.index')
                ->with('success', 'Новость добавлена!');
        }

    }

}
