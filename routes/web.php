<?php

use Illuminate\Support\Facades\Route;
use Micilini\VideoStream\VideoStream;

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
Route::get('/apply/personal', [App\Http\Controllers\ApplyController::class, 'personal_view'])->name('apply.personal_information')->middleware(['role:personal-student']);
Route::post('/apply/personal', [App\Http\Controllers\ApplyController::class, 'personal_information'])->name('apply.personal')->middleware(['role:personal-student']);
Route::get('/apply/passport', [App\Http\Controllers\ApplyController::class, 'passport_view'])->name('apply.passport_information')->middleware(['role:passport-student']);
Route::post('/apply/passport', [App\Http\Controllers\ApplyController::class, 'passport_information'])->name('apply.passport')->middleware(['role:passport-student']);
Route::post('/apply/certificate', [App\Http\Controllers\ApplyController::class, 'passportcertificate'])->name('apply.certificate')->middleware(['role:passport-student']);
Route::get('/apply/contact', [App\Http\Controllers\ApplyController::class, 'contact_view'])->name('apply.contact')->middleware(['role:contact-student']);
Route::post('/apply/contact', [App\Http\Controllers\ApplyController::class, 'contact_information'])->name('apply.contactinformation')->middleware(['role:contact-student']);
Route::get('/apply/getRegion/{id}', [App\Http\Controllers\ApplyController::class, 'getRegion'])->name('apply.getRegion')->middleware(['role:getRegion']);
Route::get('/apply/getDistricts/{id}', [App\Http\Controllers\ApplyController::class, 'getDistricts'])->name('apply.getDistricts')->middleware(['role:getRegion']);
Route::post('/apply/update', [App\Http\Controllers\ApplyController::class, 'apply_update'])->name('apply.update')->middleware(['role:students']);
Route::get('/Applicant/ApplicantInfoEdit', [App\Http\Controllers\ApplyController::class, 'apply_update_view'])->name('profile.info');
Route::get('/Applicant/UploadedDocuments', [App\Http\Controllers\ApplyController::class, 'apply_document_view'])->name('profile.upload');
// Route::get('/Applicant/ApproveToExam', [App\Http\Controllers\ApplyController::class, 'apply_approve_view'])->name('profile');
Route::post('/Applicant/ApplicantInfoEdit', [App\Http\Controllers\ApplyController::class, 'logout'])->name('profile.logout');

Route::get('/roles', [App\Http\Controllers\PermissionController::class, 'role_view'])->name('role')->middleware(['role:role-navbar']);
Route::post('/roles', [App\Http\Controllers\PermissionController::class, 'role_create'])->name('role.create')->middleware(['role:role-navbar']);
Route::get('/roles/{id}', [App\Http\Controllers\PermissionController::class, 'role_show'])->name('role.show')->middleware(['role:role-navbar']);
Route::post('/roles/{id}', [App\Http\Controllers\PermissionController::class, 'role_permission_add'])->name('role.permission')->middleware(['role:role-navbar']);

Route::get('/permissions', [App\Http\Controllers\PermissionController::class, 'index'])->name('permission')->middleware(['role:permission-navbar']);
Route::post('/permissions', [App\Http\Controllers\PermissionController::class, 'create'])->name('permission.create')->middleware(['role:permission-navbar']);
Route::post('/permissions/{id}', [App\Http\Controllers\PermissionController::class, 'delete'])->name('permission.delete')->middleware(['role:permission-navbar']);

// Applicant
Route::get('/Applicant/Details', [App\Http\Controllers\ApplicantController::class, 'Details'])->name('applicant.details');
Route::post('/Applicant/Details', [App\Http\Controllers\ApplicantController::class, 'Details_save'])->name('applicant.details_save')->middleware(['role:applicant-details']);
Route::post('/Applicant/Examinations', [App\Http\Controllers\ApplicantController::class, 'exam_save'])->name('applicant.exam_save')->middleware(['role:applicant-details']);
Route::get('/Applicant/Checkstatus', [App\Http\Controllers\ApplicantController::class, 'checkstatus'])->name('applicant.checkstatus');
Route::post('/Applicant/Checkstatus', [App\Http\Controllers\ApplicantController::class, 'apply_update'])->name('applicant.infoupdate');
Route::get('/Applicant/Examinations', [App\Http\Controllers\ApplicantController::class, 'Examinations'])->name('applicant.examinations');
Route::get('/Applicant/ApproveToExam', [App\Http\Controllers\ApplicantController::class, 'ApproveToExam'])->name('applicant.approvetoexam');

Route::get('/students', [App\Http\Controllers\StudentsController::class, 'index'])->name('students')->middleware(['role:students']);
Route::get('/students/{id}', [App\Http\Controllers\StudentsController::class, 'show'])->name('students.show')->middleware(['role:students']);
Route::post('/students/{id}', [App\Http\Controllers\StudentsController::class, 'action_status'])->name('students.status')->middleware(['role:students']);


// departments
Route::get('/departments', [App\Http\Controllers\DepartmentController::class, 'index'])->name('departments')->middleware(['role:departments-navbar']);
Route::post('/departments', [App\Http\Controllers\DepartmentController::class, 'create'])->name('departments.create')->middleware(['role:departments-navbar']);
Route::delete('/departments', [App\Http\Controllers\DepartmentController::class, 'delete'])->name('departments.delete')->middleware(['role:departments-navbar']);

// examday

Route::get('/examday', [App\Http\Controllers\DepartmentController::class, 'examday_view'])->name('examday')->middleware(['role:examday-navbar']);
Route::post('/examday', [App\Http\Controllers\DepartmentController::class, 'examday_create'])->name('examday.create')->middleware(['role:examday-navbar']);
Route::delete('/examday', [App\Http\Controllers\DepartmentController::class, 'examday_delete'])->name('examday.delete')->middleware(['role:examday-navbar']);

// end
