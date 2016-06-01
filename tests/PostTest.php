<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testPosts()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
             ->visit('/')
             ->see('Posts');
    }

    public function testCreatePost()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
             ->visit('/')
             ->click('Create Post')
             ->seePageIs('post/create')
             ->type('Title of my post', 'title')
             ->type('Body of my post', 'body')
             ->press('Create')
             ->see('Successfully created new post.')
             ->seePageIs('post');
    }
}
