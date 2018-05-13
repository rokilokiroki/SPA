<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseMigrations;
    use DatabaseTransactions;

    public function testCrudTask()
    {
        $this->json('POST', '/api/tasks',['name' => 'VueMan'])
             ->assertStatus(200)
             ->assertJson([
                'name' => 'VueMan'
             ]);
        $this->assertDatabaseHas('tasks', [
                'id'   => 1,
                'name' => 'VueMan',
                'is_done' => false,
            ]);
    }
}
