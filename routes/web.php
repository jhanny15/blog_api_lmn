<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {


  //Authors
  $router->get('authors',  ['uses' => 'AuthorController@showAllAuthors']);

  $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);

  $router->post('authors', ['uses' => 'AuthorController@create']);

  $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

  $router->put('authors/{id}', ['uses' => 'AuthorController@update']);


  //Posts
  $router->get('posts',  ['uses' => 'PostController@showAllPosts']);

  $router->get('posts/{id}', ['uses' => 'PostController@showOnePost']);

  $router->post('posts', ['uses' => 'PostController@create']);

  $router->delete('posts/{id}', ['uses' => 'PostController@delete']);

  $router->put('posts/{id}', ['uses' => 'PostController@update']);

  $router->get('post/title', ['uses' => 'PostController@showPostTitle']);


  //Comments
  $router->get('comments',  ['uses' => 'CommentController@showAllComments']);

  $router->get('comments/{id}', ['uses' => 'CommentController@showOneComment']);

  $router->post('comments', ['uses' => 'CommentController@create']);

  $router->delete('comments/{id}', ['uses' => 'CommentController@delete']);

  $router->put('comments/{id}', ['uses' => 'CommentController@update']);

  $router->get('comments_posts/{id}', ['uses' => 'CommentController@showPostComments']);

});
