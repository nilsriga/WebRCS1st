<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function() {
    return view ('pages/home')->with(['page' => 'index']);
});

Route::get('/articles', function() {
    return view ('pages/articles')->with(['page' => 'articles']);
});

Route::get('/articles1', function() {
    return view ('pages/articles1')->with(['page' => 'articles1']);
});

Route::get('/chat', function() {
    return view ('pages/chat')->with(['page' => 'chat']);
});

Route::get('/about_us', function() {
    return view ('pages/about_us')->with(['page' => 'about_us']);
});

Route::get('/404', function() {
    return view ('pages/404')->with(['page' => '404']);
});

Route::get('/register', function() {
    return view ('pages/register')->with(['page' => 'register']);
});

Route::post('/register', 'AccountController@storeUser');



Route::post('/chat/save-message', 'AccountController@saveChatMessage');

Route::get('/chat/get-messages', 'AccountController@getChatMessages');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function() {
//     return 'articles page';
// });
