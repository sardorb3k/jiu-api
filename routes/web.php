<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/apply', [App\Http\Controllers\ApplyController::class, 'apply_view'])->name('apply');
Route::get('/apply/personal', [App\Http\Controllers\ApplyController::class, 'personal_view'])->name('apply.personal_information');
Route::post('/apply/personal', [App\Http\Controllers\ApplyController::class, 'personal_information'])->name('apply.personal');
Route::get('/apply/passport', [App\Http\Controllers\ApplyController::class, 'passport_view'])->name('apply.passport_information');
Route::post('/apply/passport', [App\Http\Controllers\ApplyController::class, 'passport_information'])->name('apply.passport');
Route::post('/apply/certificate', [App\Http\Controllers\ApplyController::class, 'passportcertificate'])->name('apply.certificate');
Route::get('/apply/contact', [App\Http\Controllers\ApplyController::class, 'contact_view'])->name('apply.contact');
Route::post('/apply/contact', [App\Http\Controllers\ApplyController::class, 'contact_information'])->name('apply.contactinformation');
Route::get('/apply/getRegion/{id}', [App\Http\Controllers\ApplyController::class, 'getRegion'])->name('apply.getRegion');
Route::get('/apply/getDistricts/{id}', [App\Http\Controllers\ApplyController::class, 'getDistricts'])->name('apply.getDistricts');
Route::post('/apply/update', [App\Http\Controllers\ApplyController::class, 'apply_update'])->name('apply.update');
Route::get('/Applicant/ApplicantInfoEdit', [App\Http\Controllers\ApplyController::class, 'apply_update_view'])->name('profile.info');
Route::get('/Applicant/UploadedDocuments', [App\Http\Controllers\ApplyController::class, 'apply_document_view'])->name('profile.upload');
// Route::get('/Applicant/ApproveToExam', [App\Http\Controllers\ApplyController::class, 'apply_approve_view'])->name('profile');
Route::post('/Applicant/ApplicantInfoEdit', [App\Http\Controllers\ApplyController::class, 'logout'])->name('profile.logout');

Route::get('/roles', [App\Http\Controllers\PermissionController::class, 'role_view'])->name('role');
Route::post('/roles', [App\Http\Controllers\PermissionController::class, 'role_create'])->name('role.create');
Route::get('/roles/{id}', [App\Http\Controllers\PermissionController::class, 'role_show'])->name('role.show');
Route::post('/roles/{id}', [App\Http\Controllers\PermissionController::class, 'role_permission_add'])->name('role.permission');

Route::get('/permissions', [App\Http\Controllers\PermissionController::class, 'index'])->name('permission');
Route::post('/permissions', [App\Http\Controllers\PermissionController::class, 'create'])->name('permission.create');
Route::post('/permissions/{id}', [App\Http\Controllers\PermissionController::class, 'delete'])->name('permission.delete');

// Applicant
Route::get('/Applicant/Details', [App\Http\Controllers\ApplicantController::class, 'Details'])->name('applicant.details');
Route::post('/Applicant/Details', [App\Http\Controllers\ApplicantController::class, 'Details_save'])->name('applicant.details_save');
Route::get('/Applicant/UploadedDocuments', [App\Http\Controllers\ApplicantController::class, 'UploadedDocuments'])->name('applicant.uploadeddocuments');
Route::get('/Applicant/Examinations', [App\Http\Controllers\ApplicantController::class, 'Examinations'])->name('applicant.examinations');
Route::get('/Applicant/ApproveToExam', [App\Http\Controllers\ApplicantController::class, 'ApproveToExam'])->name('applicant.approvetoexam');

Route::get('/students', [App\Http\Controllers\StudentsController::class, 'index'])->name('students');
Route::get('/students/{id}', [App\Http\Controllers\StudentsController::class, 'show'])->name('students.show');
Route::post('/students/{id}', [App\Http\Controllers\StudentsController::class, 'action_status'])->name('students.status');


Route::get('/Departments', [App\Http\Controllers\DepartmentController::class, 'index'])->name('departments');
Route::post('/Departments', [App\Http\Controllers\DepartmentController::class, 'create'])->name('departments.create');
Route::delete('/Departments', [App\Http\Controllers\DepartmentController::class, 'delete'])->name('departments.delete');

//departments
