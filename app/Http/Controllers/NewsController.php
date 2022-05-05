<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;

//class NewsController extends Controller
//{
////    $faker = Factory::create();
//    private $news = [
//        [
//            'id' => 1,
//            'title' => 'Новость',
//            'inform' => 'Новость 1 Тут подробнее о ней',
//        ],
//        [
//            'id' => 2,
//            'title' => 'Новость 2',
//            'inform' => 'Новость 2 Тут подробнее о ней',
//        ],
//    ];
//
//    public function news()
//    {
//        $html = "<h1>Новости</h1>";
//        foreach ($this->news as $news) {
//            $html .= <<<php
//            <h2>
//                <a href="/news/{$news['id']}">
//                    {$news['title']}
//                </a>
//            </h2>
//            <div>{$news['inform']}</div>
//            <hr>
//php;
//        }
//        return $html;
//    }
//
//    public function newsOne($id)
//    {
//        $news = $this->getNewById($id);
//        $nameRoute = route('newsOne', $news['id']);
//        dump($nameRoute);
//        if (!empty($news)) {
//            $html = <<<php
//            <h1>{$news['title']}</h1>
//            <div>{$news['inform']}</div>
//            <hr>
//            <a href="/news">Назад</a>
//
//php;
//            return $html;
//        }
//        return redirect('/news');
//    }
//
//    private function getNewById($id)
//    {
//        foreach ($this->news as $news) {
//            if ($news['id'] == $id) {
//                return $news;
//            }
//        }
//        return [];
//    }
//}

class NewsController extends Controller {

//    public function getNews(int $id = null): array
//    {
//        $news = [];
//        $faker = Factory::create();
//
//        if($id) {
//            return [
//                'id' => $id,
//                'title' => $faker->jobTitle(),
//                'author' => $faker->name(),
//                'image'  => $faker->imageUrl(),
//                'description' => $faker->text(150),
//                'created_at' => now('Europe/Moscow')
//            ];
//        }
//
//        for($i=0; $i<10; $i++) {
//            $id = $i +1;
//            $news[] = [
//                'id' => $id,
//                'title' => $faker->jobTitle(),
//                'author' => $faker->name(),
//                'image'  => $faker->imageUrl(),
//                'description' => $faker->text(150),
//                'created_at' => now('Europe/Moscow')
//            ];
//        }
//
//        return $news;
//    }
//
//    public function news() {
//        return <<<php
//    <h1>Новости</h1>
//    <p>{$news['title']}</p>
//
//
//php;
//
//    }
    public function index()
    {
        return view('news.index', [
            'categoryList' => $this->getCategory()

        ]);
    }

    public function category(int $idCategory)
    {
        return view('news.category', [
            'newsList' => $this->getCategory($idCategory)
        ]);
    }

    public function show(int $idCategory, int $id)
    {
        return view('news.show', [
            'newsItem' => $this->getNews($idCategory, $id)
        ]);
    }
}
