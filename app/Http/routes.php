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

// Home
$app->get('/', function () use ($app) {
    return view('index');
});

// RSVP
$app->post('/rsvp', 'RsvpController@add');

// Who
$app->get('/who', 'RsvpController@who');
