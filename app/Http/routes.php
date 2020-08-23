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

$app->group(['prefix' => 'api'], function () use ($app) {
  $app->get('/contacts', 'ContactsController@showAllcontacts');
  $app->get('/contact/{id}', 'ContactsController@showOneContacts');
  $app->post('/contacts', 'ContactsController@create');
  $app->put('/contacts/{id}', 'ContactsController@update');
  $app->delete('/contacts/{id}', 'ContactsController@delete');
});
