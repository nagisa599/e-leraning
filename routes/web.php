<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\EnglishSelectionController;
use App\Http\Controllers\Selection;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ReviewController;


/*
|--------------------------------------------------------------------------'
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('tests/test',[TestController::class,'index']);



Route::prefix('contacts') // 頭に contacts をつける 
 ->middleware(['auth']) // 認証 
 ->name('contacts.') // ルート名 
 ->controller(ContactFormController::class) // コントローラ指定(laravel9から) 
 ->group(function(){ // グループ化 
 Route::get('/', 'index')->name('index'); // 名前つきルート 
 Route::get('/create', 'create')->name('create'); // 名前つきルート 
});




Route::prefix('English') // 頭に contacts をつける 
 ->middleware(['auth']) // 認証 
 ->name('English.') // ルート名 
 ->controller(EnglishSelectionController::class) // コントローラ指定(laravel9から) 
 ->group(function(){ // グループ化 

 Route::get('/','index')->name('index'); 
 Route::get('/finish','tangofinish')->name('tangofinish'); // 名前つきルート
 Route::get('Wordtest/Result','result')->name('result');
 Route::get('/Test/Result','testresult')->name('Testresult');
 Route::post('/store','store')->name('answer');
 Route::get('/Resultback','back')->name('back');
 Route::get('/Test/Result/{id}','detailshow')->name('detailshow');
 Route::post('/finish','finish')->name('finish');
 Route::post('/question','longanswer')->name('longanswer');
 Route::get('/{category}','question')->name('question'); // 名前つきルート
 Route::post('/Test','Test')->name('Test');

 
 
});
Route::prefix('Ranking') // 頭に contacts をつける 
 ->middleware(['auth']) // 認証 
 ->name('Ranking.') // ルート名 
 ->controller(RankingController::class) // コントローラ指定(laravel9から) 
 ->group(function(){ // グループ化 
 Route::get('/','index')->name('index'); 

 
});
Route::prefix('Review') // 頭に contacts をつける 
 ->middleware(['auth']) // 認証 
 ->name('Review.') // ルート名 
 ->controller(ReviewController::class) // コントローラ指定(laravel9から) 
 ->group(function(){ // グループ化 
 Route::get('/','index')->name('index'); 
 
 Route::get('/question','question')->name('question');
 Route::post('/answer','answer')->name('answer');

});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
