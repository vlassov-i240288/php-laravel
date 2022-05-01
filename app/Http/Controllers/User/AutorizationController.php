<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutorizationController extends Controller
{
    public function index()
    {
        return <<<php
        <h1>Форма заполнения авторизации для пользователя</h1>
        <p>Какой-то текст</p>
        <a href="/">Переход на главную</a>
php;
    }
}
