<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Middleware\UploadingFile;
use VMN\Contracts\Auth\Authenticator;
use VMN\UploadService\Uploader;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //

    Route::get('/', ['uses'=>'Article\HomeController@home'])->name('home');
    Route::get('/medicinalPlants', [
        'uses'=>'Article\ArticleFindingController@find',
    ])->name('medicinal-plant');
    Route::get('/advanceSearchPlant', [
        'uses'=>'Article\ArticleFindingController@showAdvanceSearchPlant'
    ])->name('advanced-search-plant');
    Route::get('/plantDetail', [
        'uses' => 'Article\ArticleFindingController@medicinalPlantsDetail'
    ])->name('plant-detail');
    Route::get('/addPlant', ['uses'=>'Article\ArticleEditingController@showAddPlant'])->name('add-plant');

    Route::get('/login', ['uses'=>'Auth\LoginController@showLogin'])->name('login');

    Route::get('/logout', ['uses'=>'Auth\LoginController@doLogout'])->name('logout');

    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/registerStore', function () {
        return view('storeRegister');
    })->name('register-store');

    Route::get('/regisStore', function () {
        return view('regisStore');
    })->name('regisStore');

    Route::post('/login', ['uses'=>'Auth\LoginController@doLogin'])->name('auth.login');

    Route::get('/me', function(Authenticator $auth){
        return $auth->byToken(Request::input('token'));
    });

    Route::get('/test-build', function () {
        return 'Hello World! It works';
    });

    Route::get('/test-upload', function () {
        return view('test-upload');
    });

    Route::post('/upload', ['middleware' => [UploadingFile::class], function (Uploader $uploader)
    {
        return response()->json([
            'file' => $uploader->upload(request()->file('file'))
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }]);
});

