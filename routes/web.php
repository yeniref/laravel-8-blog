<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ExtrasController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Home\HomeController;

/* Route Front */

Route::get('/',[HomeController::class,'index'],[HomeController::class,'detail']);
Route::get('/{slug}.html',[HomeController::class,'detail']);
Route::get('/kategori/{slug}',[HomeController::class,'category_post']);
Route::get('/etiket/{slug}',[HomeController::class,'tag_post']);
Route::get('/arama/', [HomeController::class,'search'])->name('kelime');
/* Route Back */

Route::middleware(['auth', 'verified'])->get('/admin', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware'=> ['auth','isAdmin'],'prefix'=>'admin'],function () {
  Route::resource('yazilar', PostController::class);
  Route::post('yazilar/upload', [PostController::class, 'uploadImage'])->name('upload');
  Route::resource('kategoriler', CategoryController::class);
  Route::resource('ekstra', ExtrasController::class);
  Route::resource('menu', MenuController::class);
  Route::resource('ayarlar', SettingController::class);
  Route::get('/yazilar/post_extra_remove/{id}', [PostController::class, 'post_extra_remove']);
});

