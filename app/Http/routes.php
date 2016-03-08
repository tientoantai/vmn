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


Route::group(['domain' => 'admin.vmn.local'], function () {
    Route::get('/', function () {
        return 'admin page';
    });
});

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/', ['uses'=>'Article\PageShowingController@home'])->name('home');

    Route::get('/medicinalPlants', [
        'uses' => 'Article\ArticleFindingController@findPlants',
    ])->name('medicinal-plant');
    Route::get('/advanceSearchPlant', [
        'uses'=>'Article\ArticleFindingController@showAdvanceSearchPlant'
    ])->name('advanced-search-plant');

    Route::get('/plantDetail', [
        'uses' => 'Article\ArticleFindingController@medicinalPlantsDetail'
    ])->name('plant-detail');
    Route::get('/addPlant', ['uses'=>'Article\PageShowingController@showAddPlant'])->name('add-plant');

    Route::get('/remedies',[
        'uses' => 'Article\ArticleFindingController@findRemedies',
    ])->name('remedies');

    Route::get('/login', ['uses'=>'Auth\LoginController@showLogin'])->name('login');

    Route::get('/logout', ['uses'=>'Auth\LoginController@doLogout'])->name('logout');

    Route::get('/profile', ['uses' => 'Auth\ProfileController@showMemberProfile'])->name('profile');

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

    Route::post('/register', ['uses' => 'Auth\LoginController@register'])->name('auth.register');

    Route::get('/me', function(Authenticator $auth){
        return $auth->byToken(Request::input('token'));
    });

    Route::post('/contributePlants',['uses'=>'Article\ArticleEditingController@addPlants'])
    ->name('contribute-plant');

    Route::post('/review', ['uses' => 'Article\ArticleReviewingController@reviewPlants'])
    ->name('postReview');

    Route::get('/test-upload', function () {
    });

    Route::post('/upload', ['middleware' => [UploadingFile::class], function (Uploader $uploader)
    {
        return response()->json([
            'file' => $uploader->upload(request()->file('file'))
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }]);


});



