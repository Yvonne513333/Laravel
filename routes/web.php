<?php

use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeacherController;

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
    //宣告變數
    // $a = 8;
    // $b = [1,2,3];
    // $c = '您好';
    // $d = (object)['id' => 1];

    // get會把全部拿出來
    // $books =Book::get();

    // 終止並印出
    // dd($books);

    // 回傳指定的vue頁面
    // return Inertia::render('Test',[
    //     'books' => $books,
    //     'count' => 5,
    //     'title' => '黃昏書店',
    // ]);

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// 將邏輯放到Conteoller
// 課程管理
Route::get('/Test',[TestController::class , 'index'])->middleware(['auth', 'verified']);

// 新增課程
Route::get('/Addclass',[TestController::class , 'addclass']);

// 編輯課程
Route::get('/Editcourse',[TestController::class , 'editcourse']);



// 學期排課
Route::get('/Semester',[TestController::class ,'semester']);

// 學期排課-新增課表
Route::get('/Semesteraddclass',[TestController::class ,'semesteraddclass']);

// 學期排課-編輯課表
Route::get('/Semesterexitclass',[TestController::class ,'semesterexitclass']);


// 新增book的資料
// Route::get('/add-book',[TestController::class ,'store'])->middleware(['auth', 'verified']);



// 以下為0316新增

// 教師列表
Route::get('/Teacherlist',[TeacherController::class ,'teacherlist']);

// 新增教師
Route::get('/Addteacher',[TeacherController::class ,'addt']);
Route::post('/Addteacher',[TeacherController::class ,'addteacher']);

// 編輯教師
Route::get('/Editteacher',[TeacherController::class ,'editteacher']);





Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
