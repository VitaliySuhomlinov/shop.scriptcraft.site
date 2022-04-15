<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ProductsListController;
use App\Http\Controllers\Admin\MainController;
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
/**Front [start]*/
Route::get('/', function () {
    return view('front.index');
});

Route::get('/products-list/{category?}/{sub_category?}', [ProductsListController::class, 'show_products_list'])->name('products-list');
/**Front [end]*/

/**Admin [start]*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
    Route::get('/', [MainController::class, 'show_index'])->name('admin.index');
});
/**Admin [end]*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*test*/
