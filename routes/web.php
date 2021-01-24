<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('alpha');
Route::get('/about-us', [HomeController::class, 'about'])->name('aboutAlpha');
Route::get('/blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('blogs/{slug}', [HomeController::class, 'blogDetails'])->name('blogDetail');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contactAlpha');

Route::get('/AHC30916-Certificate-III-in-Landscape-Construction', [CourseController::class, 'courseAHC30916'])->name('AHC30916');
Route::get('/BSB51918-Diploma-of-Leadership-and-Management', [CourseController::class, 'courseBSB51918'])->name('BSB51918');
Route::get('/CPC10111-Certificate-I-in-Construction', [CourseController::class, 'courseCPC10111'])->name('CPC10111');
Route::get('/RII30815-Certificate-III-in-Civil-Construction-Plant-Operations', [CourseController::class, 'courseRII30815'])->name('RII30815');

Route::get('/download/{fileName}', [CourseController::class, 'downloadQualification'])->name('qualificationFile');

Route::post('upload', [AdminBlogController::class, 'fileUpload']);

/**
 * Admin Routes
 */
Route::middleware(['auth:sanctum', 'verified'])->name('admin.')->group(function(){
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('home');
    
    /**
     * Blogs routes
     */
    Route::resource('blog', AdminBlogController::class);

    //Atributes
    Route::prefix('attributes')->group(function(){
        //Category
        Route::get('categories', [CategoryController::class, 'index'])->name('category');
        Route::post('categories', [CategoryController::class, 'store'])->name('category.add');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit']);
        Route::put('categories/update', [CategoryController::class, 'update'])->name('category.update');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
    });

    //Settings
    Route::prefix('settings')->group(function(){
        //Profile
        Route::get('profile', [AdminHomeController::class, 'profile'])->name('userProfile');
        Route::post('profile', [AdminHomeController::class, 'profileUpdate'])->name('userProfileUpdate');
    });
});
