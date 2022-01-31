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
    return view('main');
});

Route::get('/workers', [App\Http\Controllers\PageController::class, 'getWorkers'])->name("workers");
Route::get('/worker/{id}/tasks', [App\Http\Controllers\PageController::class, 'getWorkerTasks'])->name("worker-tasks");

Route::get('/plan', [App\Http\Controllers\PageController::class, 'getPlanForm'])->name("plan-form");
Route::post('/plan', [App\Http\Controllers\PageController::class, 'getPlan'])->name("plan");
Route::get('/summary-made', [App\Http\Controllers\PageController::class, 'getSummaryMadeForm'])->name("made-form");
Route::post('/summary-made', [App\Http\Controllers\PageController::class, 'getSummaryMade'])->name("made");
Route::get('/summary-brack', [App\Http\Controllers\PageController::class, 'getSummaryBrackForm'])->name("brack-form");
Route::post('/summary-brack', [App\Http\Controllers\PageController::class, 'getSummaryBrack'])->name("brack");

//admin panel
Route::get('/admin/main', [App\Http\Controllers\AdminPageController::class, 'getAdminMain'])->name("admin-main");

Route::get('/admin/workers', [App\Http\Controllers\AdminPageController::class, 'getEditWorkers'])->name("admin-workers");

Route::get('/admin/workers/add', [App\Http\Controllers\AdminPageController::class, 'getAddWorkerForm'])->name("add-worker-form");

Route::post('/admin/workers', [App\Http\Controllers\AdminPageController::class, 'addWorker'])->name("add-worker");
Route::get('/admin/workers/delete/{id}', [App\Http\Controllers\AdminPageController::class, 'deleteWorker'])->name("delete-worker");

Route::get('/admin/worker/{id}/tasks', [App\Http\Controllers\AdminPageController::class, 'getWorkerTasks'])->name("admin-worker-tasks");

Route::get('/admin/worker/{worker_id}task/{task_id}/delete', [App\Http\Controllers\AdminPageController::class, 'deleteTask'])->name("delete-task");

Route::get('/admin/worker/{id}tasks/add', [App\Http\Controllers\AdminPageController::class, 'getAddWorkerTaskForm'])->name("add-worker-task-form");

Route::post('/admin/worker/{id}/tasks', [App\Http\Controllers\AdminPageController::class, 'addWorkerTask'])->name("add-worker-task");

//sizes
Route::get('/admin/sizes', [App\Http\Controllers\AdminPageController::class, 'getSizes'])->name("admin-sizes");

Route::get('/admin/sizes/add', [App\Http\Controllers\AdminPageController::class, 'getAddSizeForm'])->name("add-size-form");
Route::post('/admin/sizes', [App\Http\Controllers\AdminPageController::class, 'addSize'])->name("add-size");

Route::get('/admin/sizes/{id}/delete', [App\Http\Controllers\AdminPageController::class, 'deleteSize'])->name("delete-size");

//fashions

Route::get('/admin/fashions', [App\Http\Controllers\AdminPageController::class, 'getFashions'])->name("admin-fashions");

Route::get('/admin/fashions/add', [App\Http\Controllers\AdminPageController::class, 'getAddFashionForm'])->name("add-fashion-form");
Route::post('/admin/fashions', [App\Http\Controllers\AdminPageController::class, 'addFashion'])->name("add-fashion");

Route::get('/admin/fashions/{id}/delete', [App\Http\Controllers\AdminPageController::class, 'deleteFashion'])->name("delete-fashion");