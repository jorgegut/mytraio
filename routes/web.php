<?php

use Illuminate\Support\Facades\Route;

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




// TODO: Move this categories to translations
$categories = [ 'business'=>'Business',
                    'online-courses'=>'Online Courses',
                    'recreation'=>'Recreation',
                    'wellbeing'=>'Well-Being',
                    'shopping'=>'Shopping'];

Route::get('/', function () use ($categories) {

    $n_categories = count($categories);
    for ($i=0; $i<3; $i++) {
        $latest_posts[] = ['category_name'=> array_values($categories)[rand(0,$n_categories-1)]];
    }
    
    return view('home', ['categories'=>$categories, 'latest_posts'=>$latest_posts]);
});



Route::get('/{category}', function ($category_slug) use ($categories) {

    return view('category', ['categories'=>$categories, 'category_name'=>$categories[$category_slug]]);
});


// ADMIN 
Route::get('admin/articles','ArticlesController@index')->name('articles.index');
Route::get('admin/articles/create','ArticlesController@create');
Route::post('admin/articles','ArticlesController@store');

Route::get('admin/authors','AuthorsController@index')->name('authors.index');
Route::get('admin/authors/create','AuthorsController@create');
Route::post('admin/authors','AuthorsController@store');

Route::get('admin/categories','CategoriesController@index')->name('categories.index');
Route::get('admin/categories/create','CategoriesController@create');
Route::post('admin/categories','CategoriesController@store');