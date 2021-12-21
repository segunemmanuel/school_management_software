<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\AssignSubjectController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\FeeAmountController;
use App\Http\Controllers\Backend\Setup\FeeCategoryController;
use App\Http\Controllers\Backend\Setup\DesignationController;
use App\Http\Controllers\Backend\Setup\SchoolSubjectController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Student\StudentRegController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Student\StudentRollController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
// StudentYearController

Route::get('/', function () {
return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('admin.index');
})->name('dashboard');

// Admin controllers
Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');

// User management routes
// Group routes
Route::prefix('users')->group(function(){
Route::get('/view',[UserController::class,'UserView'])->name('user.view');
Route::get('/add',[UserController::class,'UserAdd'])->name('user.add');
Route::post('/store',[UserController::class,'UserStore'])->name('users.store');
Route::get('/edit/{id}',[UserController::class,'UserEdit'])->name('users.edit');
Route::post('/update/{id}',[UserController::class,'UserUpdate'])->name('users.update');
Route::get('/delete/{id}',[UserController::class,'UserDelete'])->name('users.delete');
});

// User profile and passwords

Route::prefix('profiles')->group(function(){
Route::get('/view',[ProfileController::class,'ProfileView'])->name('profile.view');
Route::get('/edit',[ProfileController::class,'ProfileEdit'])->name('profile.edit');
Route::post('/store',[ProfileController::class,'ProfileStore'])->name('profile.store');
Route::get('/password/view',[ProfileController::class,'PassView'])->name('password.view');
Route::post('/password/update',[ProfileController::class,'PassUpdate'])->name('password.update');


});



// Setup management
// Student classes routes
Route::prefix('setups')->group(function(){
Route::get('/student/class/view',[StudentClassController::class,'ViewStudent'])->name('student.class.view');
Route::get('/student/class/add',[StudentClassController::class,'AddStudentClass'])->name('student.class.add');
Route::post('/student/class/store',[StudentClassController::class,'StoreStudentClass'])->name('store.student.class');
Route::get('/student/class/edit/{id}',[StudentClassController::class,'EditStudentClass'])->name('student.class.edit');
Route::get('/student/class/delete/{id}',[StudentClassController::class,'DeleteStudentClass'])->name('student.class.delete');
Route::post('/student/class/update/{id}',[StudentClassController::class,'UpdateStudentClass'])->name('update.student.class');





// Student year routes
Route::get('/student/year/view', [StudentYearController::class,'ViewYear'])->name('student.year.view');
Route::get('/student/year/add', [StudentYearController::class,'AddYear'])->name('student.year.add');
Route::post('/student/year/store',[StudentYearController::class,'StoreStudentYear'])->name('store.student.year');
Route::get('/student/year/edit/{id}', [StudentYearController::class,'EditYear'])->name('student.year.edit');
Route::post('/student/year/update/{id}',[StudentYearController::class,'UpdateStudentYear'])->name('update.student.year');
Route::get('/student/year/delete/{id}', [StudentYearController::class,'DeleteYear'])->name('student.year.delete');


// Student group routes
Route::get('/student/group/view', [StudentGroupController::class,'ViewGroup'])->name('student.group.view');
Route::get('/student/group/add', [StudentGroupController::class,'AddGroup'])->name('student.group.add');
Route::post('/student/group/store', [StudentGroupController::class,'StoreGroup'])->name('store.student.group');
Route::get('/student/group/edit/{id}', [StudentGroupController::class,'EditGroup'])->name('student.group.edit');
Route::post('/student/group/update/{id}',[StudentGroupController::class,'UpdateGroup'])->name('update.student.group');
Route::get('/student/group/delete/{id}',[StudentGroupController::class,'DeleteGroup'])->name('student.group.delete');

// Student shifts routes
Route::get('/student/shift/view', [StudentShiftController::class,'ViewShift'])->name('student.shift.view');
Route::get('/student/shift/add', [StudentShiftController::class,'AddShift'])->name('student.shift.add');
Route::post('/student/shift/store', [StudentShiftController::class,'StoreShift'])->name('store.student.shift');
Route::get('/student/shift/edit/{id}', [StudentShiftController::class,'EditShift'])->name('student.shift.edit');
Route::post('/student/shift/update/{id}', [StudentShiftController::class,'UpdateShift'])->name('update.student.shift');
Route::get('/student/shift/delete/{id}', [StudentShiftController::class,'DeleteShift'])->name('student.shift.delete');

// Fee categories
Route::get('/fee/category/view', [FeeCategoryController::class,'ViewFeeCat'])->name('fee.category.view');
Route::get('/fee/category/add', [FeeCategoryController::class,'AddFeeCat'])->name('fee.category.add');
Route::post('/fee/category/store', [FeeCategoryController::class,'StoreFeeCat'])->name('store.fee.category');
Route::get('/fee/category/edit/{id}', [FeeCategoryController::class,'EditFeeCat'])->name('fee.category.edit');
Route::post('/fee/category/update/{id}', [FeeCategoryController::class,'UpdateFeeCat'])->name('update.category.fee');
Route::get('/fee/category/delete/{id}', [FeeCategoryController::class,'DeleteFeeCat'])->name('fee.category.delete');



//Fee amount routes
Route::get('/fee/amount/view', [FeeAmountController::class,'ViewFeeAmount'])->name('fee.amount.view');
Route::get('/fee/amount/add', [FeeAmountController::class,'AddFeeAmount'])->name('fee.amount.add');
Route::post('/fee/amount/store', [FeeAmountController::class,'StoreFeeAmount'])->name('store.fee.amount');
Route::get('/fee/amount/edit/{fee_category_id}', [FeeAmountController::class,'EditFeeAmount'])->name('fee.amount.edit');
Route::post('/fee/amount/update/{fee_category_id}', [FeeAmountController::class,'UpdateFeeAmount'])->name('update.fee.amount');
Route::get('/fee/amount/details/{fee_category_id}', [FeeAmountController::class,'DetailFeeAmount'])->name('fee.amount.details');



// Exam rpoutes
Route::get('/exam/type/view',[ExamTypeController::class,'ViewExamType'])->name('exam.type.view');
Route::get('/exam/type/add',[ExamTypeController::class,'AddExamType'])->name('exam.type.add');
Route::post('/exam/type/store',[ExamTypeController::class,'StoreExamType'])->name('store.exam.type');
Route::get('/exam/type/edit/{id}',[ExamTypeController::class,'EditExamType'])->name('exam.type.edit');
Route::post('/exam/type/update/{id}',[ExamTypeController::class,'UpdateExamType'])->name('update.exam.type');
Route::get('/exam/type/delete/{id}',[ExamTypeController::class,'DeleteExamType'])->name('exam.type.delete');


// School subjects routes
Route::get('/school/subject/view',[SchoolSubjectController::class,'ViewSubject'])->name('school.subject.view');
Route::get('/school/subject/add',[SchoolSubjectController::class,'AddSubject'])->name('school.subject.add');
Route::post('/school/subject/add',[SchoolSubjectController::class,'StoreSubject'])->name('school.subject.store');
Route::get('/school/subject/edit/{id}',[SchoolSubjectController::class,'EditSubject'])->name('school.subject.edit');
Route::post('/school/subject/update/{id}',[SchoolSubjectController::class,'UpdateSubject'])->name('update.school.subject');
Route::get('/school/subject/delete/{id}',[SchoolSubjectController::class,'DeleteSubject'])->name('school.subject.delete');



// Assinging subject routes
Route::get('/assign/subject/view',[AssignSubjectController::class,'ViewAssignSubject'])->name('assign.subject.view');
Route::get('/assign/subject/add',[AssignSubjectController::class,'AddAssignSubject'])->name('assign.subject.add');
Route::post('/assign/subject/store',[AssignSubjectController::class,'StoreAssignSubject'])->name('store.assign.subject');
Route::get('/assign/subject/edit/{class_id}',[AssignSubjectController::class,'EditAssignSubject'])->name('assign.subject.edit');
Route::post('/assign/subject/update/{class_id}',[AssignSubjectController::class,'UpdateAssignSubject'])->name('update.assign.subject');
Route::get('/assign/subject/details/{class_id}',[AssignSubjectController::class,'DetailsAssignSubject'])->name('assign.subject.details');


// Designation routes
Route::get('/designation/view',[DesignationController::class,'ViewDesignation'])->name('designation.view');
Route::get('/designation/add',[DesignationController::class,'AddDesignation'])->name('designation.add');
Route::post('/designation/store',[DesignationController::class,'StoreDesignation'])->name('store.designation');
Route::get('/designation/edit/{id}',[DesignationController::class,'EditDesignation'])->name('designation.edit');
Route::post('/designation/update/{id}',[DesignationController::class,'UpdateDesignation'])->name('update.designation');
Route::get('/designation/delete/{id}',[DesignationController::class,'DeleteDesignation'])->name('delete.designation');


});



Route::prefix('students')->group(function(){
    Route::get('/reg/view',[StudentRegController::class,'ViewStudentReg'])->name('student.registration.view');
    Route::get('/reg/add',[StudentRegController::class,'AddStudentReg'])->name('student.registration.add');
    Route::post('/reg/store',[StudentRegController::class,'StoreStudentReg'])->name('student.registration.store');
    Route::get('/year/class/wise',[StudentRegController::class,'StudentClassYearWise'])->name('student.year.class.wise');
    Route::get('/reg/edit/{id}',[StudentRegController::class,'StudentRegEdit'])->name('student.registration.edit');
    Route::post('/reg/update/{id}',[StudentRegController::class,'StudentRegUpdate'])->name('student.registration.update');
    Route::get('/reg/promote/{student_id}',[StudentRegController::class,'StudentRegPromote'])->name('student.registration.promote');
    Route::post('/reg/promote/save/{student_id}',[StudentRegController::class,'StudentRegPromotion'])->name('promotion.student.registration');
    Route::get('/reg/details/{student_id}',[StudentRegController::class,'StudentRegDetails'])->name('student.registration.details');

// Student roll generate routes
Route::get('/roll/generate/view', [StudentRollController::class,'StudentRollView'])->name('roll.generate.view');


Route::get('/roll/getstudents', [StudentRollController::class,'GetStudents'])->name('student.registration.getstudents');




});

