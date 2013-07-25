<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('about', function()
{
	return View::make('about/about');
});

Route::get('about/faqs', function()
{
	return View::make('about/faqs');
});

Route::get('about/who', function()
{
	return View::make('about/who');
});

Route::get('about/gallery', function()
{
	return View::make('about/gallery');
});

Route::get('programs', function()
{
	return View::make('programs/programs');
});

Route::get('programs/pricing', function()
{
	return View::make('programs/pricing');
});

Route::get('registration', function()
{
	return View::make('registration');
});

Route::get('learning', function()
{
	return View::make('learning/learning');
});

Route::get('learning/lessons', function()
{
	return View::make('learning/lessons');
});

Route::get('learning/practice', function()
{
	return View::make('learning/practice');
});

Route::get('learning/practice/game1', function()
{
	return View::make('learning/games/example1');
});

Route::get('learning/tests', function()
{
	return View::make('learning/tests');
});

Route::get('store', function()
{
	return View::make('store');
});

Route::get('contact', function()
{
	return View::make('contact');
});

Route::get('login', function()
{
	return View::make('login');
});


