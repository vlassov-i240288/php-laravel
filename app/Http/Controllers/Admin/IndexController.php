<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return <<<php
        <h1>Форма заполнения авторизации для администратора</h1>
        <p>Какой-то текст</p>
        <a href="/">Переход на главную</a>
php;
    }
//    public function test1() {
//        return <<<php
//    <h1>Test1</h1>
//php;
//    }
//    public function test2() {
//        return <<<php
//    <h1>Test2</h1>
//php;
//    }
}
