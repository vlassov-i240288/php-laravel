<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MyTest extends TestCase
{
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');
        $response->assertSeeText('Сайт с новостями');
        $response->assertStatus(200);

        $response = $this->get('/admin');
        $response->assertSeeText('Тут какой-то текст 2');
        $response->assertStatus(200);

        $response = $this->get('/user');
        $response->assertSeeText('Форма заполнения авторизации для пользователя');
        $response->assertStatus(200);

    }
}
