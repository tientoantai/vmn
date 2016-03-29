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
    Route::get('/', ['uses' => 'AdminController@adminHome'])->name('adminHome');
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

    Route::get('/searchStore', [
        'uses'=>'Auth\HerbalMedicineStoreController@search'
    ])->name('search-store');

    Route::get('/plantDetail', [
        'uses' => 'Article\ArticleFindingController@medicinalPlantsDetail'
    ])->name('plant-detail');
    Route::get('/addPlant', ['uses'=>'Article\PageShowingController@showAddPlant'])->name('add-plant');

    Route::get('/editPlant', ['uses'=>'Article\PageShowingController@showEditPlant'])->name('edit-plant');

    Route::get('/remedies',[
        'uses' => 'Article\ArticleFindingController@findRemedies',
    ])->name('remedies');

    Route::get('/detailRemedy',[
        'uses' => 'Article\ArticleFindingController@detailRemedy',
    ])->name('remedy-detail');

    Route::get('/advanceSearchRemedy', [
        'uses'=>'Article\ArticleFindingController@showAdvanceSearchRemedy'
    ])->name('advanced-search-remedy');

    Route::get('/addRemedy', ['uses'=>'Article\PageShowingController@showAddRemedy'])->name('add-remedy');

    Route::get('/login', ['uses'=>'Auth\LoginController@showLogin'])->name('login');

    Route::get('/logout', ['uses'=>'Auth\LoginController@doLogout'])->name('logout');

    Route::get('/profile/{account}', ['uses' => 'Auth\ProfileController@showMemberProfile'])->name('profile');

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

    Route::post('/memberRegister',
        ['uses' => 'Auth\RegisterController@memberRegister'])
        ->name('auth.register');

    Route::post('/storeRegister', ['uses' => 'Auth\RegisterController@storeRegister'])
        ->name('auth.storeRegister');

    Route::get('/me', function(Authenticator $auth){
        return $auth->byToken(Request::input('token'));
    });

    Route::post('/contributePlants',['uses'=>'Article\ArticleEditingController@addPlants'])
    ->name('contribute-plant');

    Route::post('/updatePlants',['uses'=>'Article\ArticleEditingController@editPlants'])
        ->name('update-plant');

    Route::post('/contributeRemedy', ['uses'=>'Article\ArticleEditingController@addRemedy'])
        ->name('contribute-remedy');


    Route::post('/review', ['uses' => 'Article\ArticleReviewingController@reviewPlants'])
    ->name('postReview');

    Route::post('/reportPlant', ['uses' => 'Article\ArticleReportingController@reportPlant'])
        ->name('postReport');



    Route::post('/upload', ['middleware' => [UploadingFile::class], function (Uploader $uploader)
    {
        return response()->json([
            'file' => $uploader->upload(request()->file('file'))
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }]);


});



