<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class AuthorTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    
    public function testPage()
    {

        $this->get('/');
        $this->assertEquals(200, $this->response->status());
         
    }

    public function testShowAllAuthors()
    {

        $this->seeInDatabase('comments', ['comment_id' => '2']);

    }
    public function testShowOneAuthors()
    {

        $this->seeInDatabase('authors',[
            'username'=> 'Smith72'
        ]);
  
    }
}
