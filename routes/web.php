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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index',])->name('home');

    Route::get('/principal/{category}/', [App\Http\Controllers\HomeController::class, 'show'])->name('principal.category');

    Route::get('/principal/{wizard}/wizard', [App\Http\Controllers\HomeController::class, 'wizard'])->name('principal.wizard');

    Route::get('/principal', [App\Http\Controllers\HomeController::class, 'registro'])->name('principal.registro');

    // Route::resource('home', [App\Http\Controllers\HomeController::class]);

    Route::get('wizard', function () {
        return view('home');
    });

    // User
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

    // Scheme
    // Route::get('/schemes/create', [App\Http\Controllers\SchemeController::class, 'create'])->name('schemes.create');
    // Route::post('/schemes', [App\Http\Controllers\SchemeController::class, 'store'])->name('schemes.store');
    // Route::get('/schemes', [App\Http\Controllers\SchemeController::class, 'index'])->name('schemes.index');
    // Route::get('/schemes/{scheme}', [App\Http\Controllers\SchemeController::class, 'show'])->name('schemes.show');
    // Route::get('/schemes/{scheme}/edit', [App\Http\Controllers\SchemeController::class, 'edit'])->name('schemes.edit');
    // Route::put('/schemes/{scheme}', [App\Http\Controllers\SchemeController::class, 'update'])->name('schemes.update'); 
    // Route::delete('/schemes/{scheme}', [App\Http\Controllers\SchemeController::class, 'destroy'])->name('schemes.delete');

    Route::resource('schemes', App\Http\Controllers\SchemeController::class);
    Route::resource('criteria', App\Http\Controllers\CriterionController::class);
    Route::resource('error', App\Http\Controllers\ErrorController::class);
    Route::resource('items', App\Http\Controllers\ItemController::class);

    Route::resource('event', App\Http\Controllers\EventController::class);
    Route::resource('competitions', App\Http\Controllers\CompetitionController::class);
    Route::resource('category-type', App\Http\Controllers\CategoryTypeController::class);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);

    Route::resource('academies', App\Http\Controllers\AcademyController::class);
    Route::resource('participants', App\Http\Controllers\ParticipantController::class);

    Route::resource('posts', App\Http\Controllers\PostController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);

    Route::resource('/in-shopping-cart', App\Http\Controllers\inShoppingCartController::class);
    Route::get('/carrito', [App\Http\Controllers\ShoppingCartController::class, 'index']);

    Route::resource('categories-competition', App\Http\Controllers\CategoriesCompetitionController::class);
    Route::resource('competing-participant', App\Http\Controllers\CompetingParticipantController::class);
    Route::resource('competing-event', App\Http\Controllers\CompetingEventController::class);
});
