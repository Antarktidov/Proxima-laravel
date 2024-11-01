<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudiesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\BlogsController;

use App\Http\Middleware\AdminPanelMiddleware;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [StudiesController::class,'index'])->name('study.index');
Route::post('/application', [StudiesController::class,'application'])->name('study.application');
Route::post('/applied', [StudiesController::class,'applied'])->name('study.applied');
Route::get('/dogovor', [AgreementController::class,'index'])->name('agreement.index');
Route::post('/teachers/studies/{study}', [TeachersController::class,'show'])->name('study.show');//teachers/1
Route::get('/teachers', [TeachersController::class,'index'])->name('teachers.index');
Route::get('/blog', [BlogsController::class,'index'])->name('blogs.index');
Route::get('/blog/{blogId}', [BlogsController::class,'getBlog'])->name('blogs.getBlog');

Route::get('/admin/students-list', [StudentsController::class,'index'])->name('student.index')
->middleware(AdminPanelMiddleware::class);

Route::get('/admin/v2/students-list', [StudentsController::class,'v2'])->name('student.v2')
->middleware(AdminPanelMiddleware::class);

Route::delete('/admin/students-list/{student}/delete', [StudentsController::class,'destroy'])
->name('student.delete')->middleware(AdminPanelMiddleware::class);

Route::get('/admin/v2/blog/create', [BlogsController::class,'create'])->name('blogs.create')
->middleware(AdminPanelMiddleware::class);

Route::post('/admin/v2/blog/store', [BlogsController::class,'store'])->name('blogs.store')
->middleware(AdminPanelMiddleware::class);
Route::get('/admin/v2/blog', [BlogsController::class,'admin_index'])->name('blogs.admin.index')
->middleware(AdminPanelMiddleware::class);
Route::delete('/admin/v2/blog/{blog}/delete/', [BlogsController::class,'delete'])->name('blogs.delete')
->middleware(AdminPanelMiddleware::class);
Route::patch('/admin/v2/blog/{blog}', [BlogsController::class,'update'])->name('blogs.update')
->middleware(AdminPanelMiddleware::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Вьюха
Route::get('/vue/teachers', [TeachersController::class,'vue'])->name('teachers.vue');
Route::get('/vue/blog', [BlogsController::class,'vue'])->name('blogs.vue');


//Api
Route::get('/api/teachers', [TeachersController::class,'api'])->name('teachers.api');
Route::get('/api/blog', [BlogsController::class,'api'])->name('blogs.api');