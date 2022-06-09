<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function Index()
    {
        $xml = XmlParser::load('https://news.yandex.ru/music.rss');

        $data = $xml -> parse([
           'category_id'=>4,
           'title'=>[
               'uses'=>'channel.title'
            ],
            'link'=>[
                'uses'=>'channel.link'
            ],
            'inform'=>[
                'uses'=>'channel.description'
            ],
            'image'=>[
                'uses'=>'channel.image.url'
            ],
            'news'=>[
                'uses'=>'channel.item[category_id,title,link,guid,description,pubDate]'
            ]
        ]);

//        dd($data['news']);

        $testNews=new News();
        $testNews->create($data);
        return redirect()->route('admin.index');

    }
}
