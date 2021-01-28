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
    public function testShowAllAuthors()
    {

        $this->seeInDatabase('authors',[
            'username'=> 'Smith72'
        ]);


        
    }
}
