<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => 'language'], function () {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@index'
    ]);

    Route::get('language/{language_code}', [
        'as' => 'language.change', 'uses' => 'LanguageController@changeLanguageTo'
    ]);

    Route::match(['get', 'post'], 'tinder/contact', [
        'as' => 'tinder.contact', 'uses' => 'TinderController@getContactInfo'
    ]);

    Route::match(['get'], 'tinder/contact/na', [
        'as' => 'tinder.contact-no-animations', 'uses' => 'TinderController@getContactInfoNoAnimations'
    ]);

    Route::match(['get', 'post'], 'tinder/questions', [
        'as' => 'tinder.questions', 'uses' => 'TinderController@getQuestions'
    ]);

    Route::match(['get'], 'tinder/confirmation', [
        'as' => 'tinder.confirm', 'uses' => 'TinderController@confirm'
    ]);

    if (env('APP_ENV') == 'local') {
        Route::match(['get'], 'tinder/email/{tinder_contact_id}/{tinder_answer_id}', [
            'as' => 'local.tinder.email', 'uses' => 'LocalController@renderEmail'
        ]);
    }
});

