<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TestiController;
use App\Models\Patners;
use App\Models\Post;
use App\Models\Project;
use App\Models\Testimoni;
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

Route::get('/', [HomeController::class, "show"])->name("home");

Route::middleware(['auth', "verified"])->group(function () {
    Route::get("/setting/testimoni", [TestiController::class, "show"])->name("testimoni");
    Route::post("/setting/testimoni", [TestiController::class, "store"])->name("testimoni");
    Route::delete("/setting/testimoni/{testimoni:nama}", [TestiController::class, "destroy"])->name("delete-testi");
    Route::get("/setting/patners", [PatnerController::class, "show"])->name("patners");
    Route::post("/setting/patners", [PatnerController::class, "store"])->name("patners");
    Route::delete("/setting/patners/{patners:nama}", [PatnerController::class, "destroy"])->name("delete-patners");
    Route::get("/blogs/manage/create", [BlogController::class, "create"])->name("create-blog");
    Route::get("/blogs/manage/myblog", [BlogController::class, "myblog"])->name("myblog");
    Route::get("/blogs/manage/edit/{posts:slug}", [BlogController::class, "edit"])->name("edit-blog");
    Route::put("/blogs/manage/edit/{posts:slug}", [BlogController::class, "update"])->name("edit-blog");
    Route::delete("/blogs/manage/delete/{posts:slug}", [BlogController::class, "delete"])->name("delete-blog");
    Route::post("/blogs/manage/create", [BlogController::class, "store"])->name("create-blog");
    Route::get("/project/manage/myproject", [ProjectController::class, "show"])->name("myproject");
    Route::post("/project/manage/myproject", [ProjectController::class, "store"])->name("myproject");
    Route::delete("/project/manage/{project:nama}", [ProjectController::class, "destroy"])->name("delete-project");


    Route::get("/dashboard", [DashboardController::class, "show"])->name("dashboard");
});



Route::get("/blogs", [BlogController::class, "show"])->name("show-blog");
Route::get("/blogs/{posts:slug}", [BlogController::class, "detail"])->name("detail-blog");

// Route::get("/visi-misi", function () {
//     return view("page.visi-misi");
// })->name("visi-misi");
// Route::get("/program-kami", function () {
//     return view("page.program-kami");
// })->name("program-kami");
Route::get("/my-experience", [HomeController::class, "experience"])->name("my-experience");

// Route::get('/dashboard', [DashboardController::class, "show"])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
