<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;


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

//トップページ/をMessagesControllerのindexアクションに設定する
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TasksController::class, 'index']);

//CRUD taskのページ表示show＞新規登録を処理store＞更新処理update＞削除destroy
//省略
Route::resource('tasks', TasksController::class);