<?php
  use App\Http\Controllers\LanguageController;
  //use App\Http\Controllers\StorageFileController;
  use App\Http\Controllers\DocumentUploadController;
 

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


// Route url

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/', function(){
  return redirect('/login');
});



// Route Dashboards
Route::get('/dashboard-analytics', 'DashboardController@dashboardAnalytics');

// Route Components
Route::get('/sk-layout-2-columns', 'StaterkitController@columns_2');
Route::get('/sk-layout-fixed-navbar', 'StaterkitController@fixed_navbar');
Route::get('/sk-layout-floating-navbar', 'StaterkitController@floating_navbar');
Route::get('/sk-layout-fixed', 'StaterkitController@fixed_layout');

// acess controller
Route::get('/access-control', 'AccessController@index');
Route::get('/access-control/{roles}', 'AccessController@roles');
Route::get('/modern-admin', 'AccessController@home')->middleware('permissions:approve-post');

// Auth::routes();

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);


Route::group(['middleware' => ['auth','superadmin'], 'prefix' => 'superadmin'], function(){

  Route::get('/', 'SuperAdminPageController@index')->name('superadmin');

  Route::get('/roles', 'SuperAdminPageController@roles')->name('super-admin.roles');

  Route::post('/delete_role', 'SuperAdminPageController@delete')->name('superadmin.delete_role');

  Route::get('/roles/{email}', 'SuperAdminPageController@single_role')->name('superadmin.singlerole');

  Route::post('/create_role', 'CreateRolesController@store')->name('super-admin.create_role');

});


Route::group(['middleware' => ['auth','es'], 'prefix' => 'es'], function(){

  Route::get('/', 'ESPageController@index')->name('es');

  Route::get('/registrations', 'ESPageController@all_accounts')->name('es.registrations');

  Route::get('/single_account/{id}', 'ESPageController@single_account')->name('es.single_account');

  Route::get('/applications', 'ESPageController@all_applications')->name('es.applications');

  Route::get('/single_application/{slug}', 'ESPageController@single_application')->name('es.single_application');

  Route::get('/staff', 'ESPageController@index')->name('es.staff');

  Route::get('/notifications', 'ESPageController@index')->name('es.notifications');

  Route::get('/settings', 'ESPageController@settings')->name('es.settings');

  Route::post('/esregistry/approve', 'ESRegistryConfirmation@es_approve')->name('es.approve');

  Route::post('/esregistry/disapprove', 'ESRegistryConfirmation@es_disapprove')->name('es.disapprove');

});


Route::group(['middleware' => ['auth','deskoffice'], 'prefix' => 'deskoffice'], function(){

  Route::get('/', 'DeskOfficePageController@index')->name('deskoffice');

  Route::get('/all_applications', 'DeskOfficePageController@all_applications')->name('dk.all_applications');

  Route::get('/all_applications/single_application', 'DeskOfficePageController@single_application')->name('dk.single_application');

  Route::get('/settings', 'DeskOfficePageController@settings')->name('dk.settings');

  Route::get('/trail', 'DeskOfficePageController@index')->name('dk.trail');

  Route::get('/notifications', 'DeskOfficePageController@notifications')->name('dk.notifications');

  Route::get('/report', 'DeskOfficePageController@report')->name('dk.report');

  Route::get('/operations', 'DeskOfficePageController@operations')->name('operations');

  Route::get('/operations/roles', 'DeskOfficePageController@roles')->name('operations.roles');

  Route::get('/operations/singlerole', 'DeskOfficePageController@singlerole')->name('operations.singlerole');


});



Route::group(['middleware' => ['auth','accounts'], 'prefix' => 'accounts'], function(){

  Route::get('/', 'AccountsOfficePageController@index')->name('accounts');

});


Route::group(['middleware' => ['auth','head_of_operations'], 'prefix' => 'head_operations'], function(){

  Route::get('/', 'HeadOfOperationsPageController@index')->name('head_operations.home');

});


Route::group(['middleware' => ['auth','es_office'], 'prefix' => 'es_office'], function(){

  Route::get('/', 'ESOfficePageController@index')->name('es_office.home');

});



Route::group(['middleware' => ['auth','user'], 'prefix' => 'user'], function(){

  Route::get('/', 'UsersPageController@index')->name('user');
  Route::get('/notifications', 'UsersPageController@notifications')->name('user.notifications');
  Route::get('/profile', 'UsersPageController@profile')->name('user.profile')->middleware('application_stage');
  Route::get('/profile2', 'UsersPageController@profile2')->name('user.profile2')->middleware('application_stage');

  Route::get('/profile3', 'UsersPageController@profile3')->name('user.profile3')->middleware('application_stage');

  
  Route::get('/profile/ministry', 'UsersPageController@ministry')->name('user.ministry')->middleware('application_stage');
  Route::get('/profile/military', 'UsersPageController@military')->name('user.military')->middleware('application_stage');

  Route::get('/profile/military', 'UsersPageController@military')->name('user.military');

  Route::post('/registry_submit', 'ApplicationStageController@stage1')->name('user.registry_submit');

  Route::get('/profile3', 'UsersPageController@profile3')->name('user.profile3')->middleware('application_stage');
  Route::get('/view_profile', 'UsersPageController@view_profile')->name('user.view_profile')->middleware('application_stage');
  Route::get('/view_profile_And_Submit', 'UsersPageController@view_profile_And_Submit')->name('user.view_profile_And_Submit');
  Route::get('/uploads', 'UsersPageController@profile3')->name('user.uploads')->middleware('application_stage');
  Route::get('/userloans', 'UsersPageController@userloans')->name('user.userloans');
  Route::get('/userloans/loan_application', 'UsersPageController@loan_application')->name('user.loan_application');

  //get for loan application routes

});

Route::post('update_bio_data', 'PersonalInfoController@bioData')->name('update_bioData')->middleware('auth');

Route::get('edit_bio', 'PersonalInfoController@edit_bio')->name('edit_bio')->middleware('auth');

Route::get('edit_appoint/{name}', 'PersonalInfoController@edit_appoint')->name('edit_appoint')->middleware('auth');



Route::get('select_category/{name}', 'PersonalInfoController@select_category')->name('select_category')->middleware('auth');

Route::post('update_appoint_data', 'PersonalInfoController@appointData')->name('update_appointData')->middleware('auth');

Route::post('/upload_doccc/{type}','DocumentUploadController@up_doccc')->name('upload_docc')->middleware('auth');

Route::post('/edit_doccc/{type}','DocumentUploadController@edit_doccc')->name('edit_docc')->middleware('auth');

Route::post('upload_passport', 'DocumentUploadController@upload_passport')->name('upload_passport')->middleware('auth');

Route::post('edit_passport', 'DocumentUploadController@edit_passport')->name('edit_passport')->middleware('auth');

Route::post('upload_apletter', 'DocumentUploadController@upload_apletter')->name('upload_apletter')->middleware('auth');

Route::post('upload_payslip', 'DocumentUploadController@upload_payslip')->name('upload_payslip')->middleware('auth');

Route::post('upload_gazzette', 'DocumentUploadController@upload_gazzette')->name('upload_gazzette')->middleware('auth');

Route::post('upload_surety', 'DocumentUploadController@upload_surety')->name('upload_surety')->middleware('auth');

Route::post('upload_reason', 'DocumentUploadController@upload_reason')->name('upload_reason')->middleware('auth');

// NEW UPLOAD CODES


Route::post('uploadPhoto', 'DocumentUploadController@uploadPhoto')->name('uploadPhoto')->middleware('auth');

Route::post('uploadAppointment', 'DocumentUploadController@uploadAppointment')->name('uploadAppointment')->middleware('auth');

Route::post('updateLoanType', 'LoanApplicationController@updateLoanType')->name('updateLoanType')->middleware('auth');

Route::get('updateLoanType', 'LoanApplicationController@showLoan1blade')->name('updateLoanType')->middleware('auth');
//showLoan1blade

Auth::routes();

Route::get('pages-logout', 'RoutingController@logout')->name('log_me_out');



Route::get('/choose', 'ChooseRoleController@index');



Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


Route::view('/payment_success', 'pages.user.purchase_success');

// routes to display files
Route::get('image/{filename}', [DocumentUploadController::class,'getPubliclyStorgeFile'])->name('image.displayImage');

Route::get('appointment/{filename}', [DocumentUploadController::class,'getPubliclyStorgeFileAppointment'])->name('appointment.displayImage');

Route::get('/userloans/step1', 'LoanApplicationController@step1')->name('loan.step1');

Route::get('/userloans/step2', 'LoanApplicationController@step2')->name('loan.step3');

Route::get('/userloans/step3', 'LoanApplicationController@step3')->name('loan.step3');

//upload loan documents

Route::post('uploadLoanDocumentsStep1', 'DocumentUploadController@uploadLoanDocumentsStep1')->name('uploadLoanDocumentsStep1')->middleware('auth');

Route::post('uploadLoanDeclration', 'DocumentUploadController@uploadLoanDeclration')->name('uploadLoanDeclration')->middleware('auth');

Route::post('uploadCertificate', 'DocumentUploadController@uploadCertificate')->name('uploadCertificate')->middleware('auth');
// route to get all loan documents
Route::get('getLoanDocuments/{filename}', [DocumentUploadController::class,'getPubliclyStorgeFileLoanDocuments'])->name('loan.displayImage');


Route::view('/spinner', 'pages.user.under_processing');


Route::view('/loan_success', 'pages.user.loan_success')->name('loan_success');


Route::view('/all_forms', 'pages.user.all_forms');

Route::view('/print_out', 'pages.user.print_out');


Route::get('/userloansapply/step1', 'LoanApplicationController@stepApplyforLoan')->name('loan.applyloan');

Route::get('/userloans/step1', 'LoanApplicationController@step1')->name('loan.step1');

Route::get('/userloans/step2', 'LoanApplicationController@step2')->name('loan.step3');

Route::get('/userloans/step3', 'LoanApplicationController@step3')->name('loan.step3');

// new route second step loan 2
Route::get('/userloans/secondupload', 'LoanApplicationController@uploadstep2')->name('user.loanstep2');


Route::post('updateLoanType', 'LoanApplicationController@updateLoanType')->name('updateLoanType')->middleware('auth');

Route::get('updateLoanType', 'LoanApplicationController@PreviousButtonForupdateLoanType')->name('updateLoanType');

