<?php

namespace Tests\Unit;
use App\Book; 

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $book = new Book();
        $response = $user->selectUser();
        $this->assertSame('太郎', $response['name']);

    }
}
