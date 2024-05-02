<?php

use App\Models\Theme;
use App\Models\Category;
use App\Models\Material;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardThemeController;
use App\Http\Controllers\DashboardCategoryController;

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

Route::get('/', function () {
    return view('home',[
        'title' => 'Home',
        'categories' => Category::all(),
        'themes' => Theme::paginate(16)
    ]);
});

// Route::get('/materials', [MaterialController::class, 'index']);
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index']);

Route::get('/themes', [ThemeController::class, 'index']);
Route::post('/themes/getlink', [ThemeController::class, 'show']);
Route::get('/themes/{theme:slug}', [ThemeController::class, 'show']);

Route::get('/categories',[CategoryController::class, 'index']);
Route::get('/categories/{category:slug}',[CategoryController::class, 'show']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        'title' => 'Dashboard'
    ]);
});

Route::get('/dashboard/materials', function(){
    return view('dashboard.materials.index',[
        'title' => 'Dashboard Theme',
        'materials' => Material::latest()->get()
    ]);
});

Route::get('/dashboard/categories/checkSlug',[DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/categories',DashboardCategoryController::class)->middleware('auth');

Route::resource('/dashboard/themes',DashboardThemeController::class)->middleware('auth');
