<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AddNewsController extends Controller
{
    public function addNews()
    {
        return view('formAddNews', ['categories'=>Categories::all()]);
    }

    public function add(Request $request)
    {

        $validated = $request->only(['title', 'inform', 'category_id']);
        $news = new News($validated);

        if($request->isMethod('post')) {
            $this->validate($request, News::rules());
            $news->fill($request->all());
            $news->save();
            return redirect()->route('admin.index');
        }

        if (!empty($request->old())) {
            $news->fill($request->old());
        }

        if($news->save()) {
            return redirect()->route('admin.index')
                ->with('success', trans('message.admin.index.create.success'));
        }
    }

    public function delNews($id)
    {
        News::where('id', $id)->delete();
        return redirect()->route('admin.index');
    }
}
