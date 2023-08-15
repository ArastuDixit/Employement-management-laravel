<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Employee\EmployeeController;

use App\Http\Controllers\Trainer\TrainerController;

use App\Http\Controllers\Holidays\HolidaysController;

use App\Http\Controllers\Departments\DepartmentController;

use App\Http\Controllers\Activity\ActivityController;

use App\Http\Controllers\Events\EventController;

use App\Http\Controllers\Payroll\PayrollController;

use App\Http\Controllers\Accounts\AccountController;

use App\Http\Controllers\Reports\ReportController;

use App\Http\Controllers\Profile\ProfileController;

use App\Http\Controllers\Projectdashboard\ProjectdashboardController;

use App\Http\Controllers\Projectlist\ProjectlistController;

use App\Http\Controllers\Taskboard\TaskboardController;

use App\Http\Controllers\Ticketlist\TicketlistController;

use App\Http\Controllers\Ticketdetails\TicketdetailsController;

use App\Http\Controllers\Projectclients\ProjectclientsController;

use App\Http\Controllers\Projecttodo\ProjecttodoController;

use App\Http\Controllers\Jobportaldashboard\JobportaldashboardController;

use App\Http\Controllers\Jobportalpositions\JobportalpositionsController;

use App\Http\Controllers\Jobportalapplicants\JobportalapplicantsController;

use App\Http\Controllers\Jobportalresumes\JobportalresumesController;

use App\Http\Controllers\Jobportalsettings\JobportalsettingsController;

use App\Http\Controllers\Appchat\AppchatController;

use App\Http\Controllers\Appcontact\AppcontactController;

use App\Http\Controllers\Appcalendar\AppcalendarController;
/*

|--------------------------------------------------------------------------

| User Routes

|--------------------------------------------------------------------------

*/



Route::get('/', function () {
    return view('welcome');
});



/*****************************USER**********************************/





//Route::get('dashboard', [UserController::class, 'dashboard']); 

Route::get('login', [UserController::class, 'index'])->name('login');

Route::post('user-login', [UserController::class, 'userLogin'])->name('login.user');

Route::get('registration', [UserController::class, 'registration'])->name('register-user');

Route::post('user-registration', [UserController::class, 'userRegistration'])->name('register.user');

Route::get('signout', [UserController::class, 'signOut'])->name('signout');



Route::group(['middleware' => ['web']], function () {

    //employee

    Route::get('dashboard', [UserController::class, 'dashboard']);

    Route::get('employee', [UserController::class, 'employee']);

    Route::get('employee/edit/{id}', [UserController::class, 'employee']);



    Route::post('add-employee', [EmployeeController::class, 'addEmployee'])->name('add-employee');

    Route::post('edit-employee', [EmployeeController::class, 'editEmployee'])->name('edit-employee');

    //trainer



    Route::get('trainer', [TrainerController::class, 'trainer']);

    Route::post('add-trainer', [TrainerController::class, 'addTrainer'])->name('add-trainer');

    Route::post('delete_data', [TrainerController::class, 'delete_data'])->name('delete_data');

    Route::get('trainer/edit/{id}', [TrainerController::class, 'trainer']);

    Route::post('edit-trainer', [TrainerController::class, 'editTrainer'])->name('edit-trainer');


    //Holidays

    Route::get('holidays', [HolidaysController::class, 'holidays']);

    Route::post('add-holiday', [HolidaysController::class, 'addHoliday'])->name('add-holiday');

    Route::get('holidays/edit/{id}', [HolidaysController::class, 'holidays']);

    Route::post('edit-holidays', [HolidaysController::class, 'editHoliday'])->name('edit-holidays');

    Route::post('delete_holiday', [HolidaysController::class, 'delete_holiday'])->name('delete_holiday');


    //Users

    Route::get('/hr-users', [UserController::class, 'users'])->name('hr-users');

    Route::post('add-users', [UserController::class, 'addUser'])->name('add-users');

    Route::get('users/edit/{id}', [UserController::class, 'users']);

    Route::post('edit-users', [UserController::class, 'editUsers'])->name('edit-users');

    Route::post('delete_users', [UserController::class, 'delete_users'])->name('delete_users');


    //Departments

    Route::get('/departments', [DepartmentController::class, 'department'])->name('departments');
    Route::post('add-department', [DepartmentController::class, 'addDepartment'])->name('add-department');
    Route::get('departments/edit/{id}', [DepartmentController::class, 'department']);
    Route::post('edit-department', [DepartmentController::class, 'editDepartment'])->name('edit-department');
    Route::post('delete_department', [DepartmentController::class, 'delete_department'])->name('delete_department');

    //Departments

    Route::get('/activities', [ActivityController::class, 'activity'])->name('activities');
    // Route::post('add-department', [DepartmentController::class, 'addDepartment'])->name('add-department');
    // Route::get('departments/edit/{id}', [DepartmentController::class, 'department']);
    // Route::post('edit-department', [DepartmentController::class, 'editDepartment'])->name('edit-department');
    // Route::post('delete_department', [DepartmentController::class, 'delete_department'])->name('delete_department');


    //Events

    Route::get('/events', [EventController::class, 'event'])->name('events');

    //Payroll
    // Route::get('payroll', [PayrollController::class, 'payroll']);
    Route::get('/payroll', [PayrollController::class, 'payroll'])->name('payroll');
    Route::post('add-payroll', [PayrollController::class, 'addPayroll'])->name('add-payroll');
    Route::get('payroll/edit/{id}', [PayrollController::class, 'Payroll']);
    Route::post('edit-payroll', [PayrollController::class, 'editPayroll'])->name('edit-payroll');
    Route::post('delete_payroll', [PayrollController::class, 'delete_payroll'])->name('delete_payroll');


    //Accounts

    Route::get('/accounts', [AccountController::class, 'account'])->name('accounts');
    Route::post('add-account', [AccountController::class, 'addAccount'])->name('add-account');
    Route::get('accounts/edit/{id}', [AccountController::class, 'Account']);
    Route::post('edit-account', [AccountController::class, 'editAccount'])->name('edit-account');
    Route::post('delete_account', [AccountController::class, 'delete_account'])->name('delete_account');

    //Reports

    Route::get('/reports', [ReportController::class, 'report'])->name('reports');
    Route::post('add-report', [ReportController::class, 'addReport'])->name('add-report');
    Route::get('reports/edit/{id}', [ReportController::class, 'Report']);
    Route::post('edit-report', [ReportController::class, 'editReport'])->name('edit-report');
    Route::post('delete_report', [ReportController::class, 'delete_report'])->name('delete_report');

    //Profile

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

    // project-dashboard

    Route::get('/project-dashboard', [ProjectdashboardController::class, 'projectdashboard'])->name('project-dashboard');
    Route::post('add-project-dashboard', [ProjectdashboardController::class, 'addProjectdashboard'])->name('add-project-dashboard');
    Route::get('project-dashboard/edit/{id}', [ProjectdashboardController::class, 'Projectdashboard']);
    Route::post('edit-project-dashboard', [ProjectdashboardController::class, 'editProjectdashboard'])->name('edit-project-dashboard');
    Route::post('delete_projectdashboard', [ProjectdashboardController::class, 'delete_projectdashboard'])->name('delete_projectdashboard');

    // project-list

    Route::get('/project-list', [ProjectlistController::class, 'projectlist'])->name('project-list');
    Route::post('add-project-list', [ProjectlistController::class, 'addProjectlist'])->name('add-project-list');
    Route::get('project-list/edit/{id}', [ProjectlistController::class, 'Projectlist']);
    Route::post('edit-project-list', [ProjectlistController::class, 'editProjectlist'])->name('edit-project-list');
    Route::post('delete_projectlist', [ProjectlistController::class, 'delete_projectlist'])->name('delete_projectlist');
    
    // project-taskboard

    Route::get('/taskboard', [TaskboardController::class, 'taskboard'])->name('taskboard');
    Route::post('add-taskboard', [TaskboardController::class, 'addTaskboard'])->name('add-taskboard');
    Route::get('taskboard/edit/{id}', [TaskboardController::class, 'Taskboard']);
    Route::post('edit-taskboard', [TaskboardController::class, 'editTaskboard'])->name('edit-taskboard');
    Route::post('delete_taskboard', [TaskboardController::class, 'delete_taskboard'])->name('delete_taskboard');

    // project-ticketlist

    Route::get('/ticketlist', [TicketlistController::class, 'ticketlist'])->name('ticketlist');

    // project-ticketdetails

    Route::get('/ticket-details', [TicketdetailsController::class, 'ticketdetails'])->name('ticket-details');

    // project-clients

    Route::get('/project-clients', [ProjectclientsController::class, 'projectclients'])->name('project-clients');

    // project-todo

    Route::get('/project-todo', [ProjecttodoController::class, 'projecttodo'])->name('project-todo');
    Route::post('add-projecttodo', [ProjecttodoController::class, 'addProjecttodo'])->name('add-projecttodo');
    Route::get('project-todo/edit/{id}', [ProjecttodoController::class, 'Projecttodo']);
    Route::post('edit-projecttodo', [ProjecttodoController::class, 'editProjecttodo'])->name('edit-projecttodo');
    Route::post('delete_projecttodo', [ProjecttodoController::class, 'delete_projecttodo'])->name('delete_projecttodo');

    // jobportal-dashboard

    Route::get('/jobportal-dashboard', [JobportaldashboardController::class, 'jobportaldashboard'])->name('jobportal-dashboard');
    Route::post('add-jobportaldashboard', [JobportaldashboardController::class, 'addJobportaldashboard'])->name('add-jobportaldashboard');
    Route::get('jobportal-dashboard/edit/{id}', [JobportaldashboardController::class, 'Jobportaldashboard']);
    Route::post('edit-jobportaldashboard', [JobportaldashboardController::class, 'editJobportaldashboard'])->name('edit-jobportaldashboard');
    Route::post('delete_jobportaldashboard', [JobportaldashboardController::class, 'delete_jobportaldashboard'])->name('delete_jobportaldashboard');

    // jobportal-positions

    Route::get('/jobportal-positions', [JobportalpositionsController::class, 'jobportalpositions'])->name('jobportal-positions');

    // jobportal-applicants

    Route::get('/jobportal-applicants', [JobportalapplicantsController::class, 'jobportalapplicants'])->name('jobportal-applicants');
    Route::post('add-jobportalapplicants', [JobportalapplicantsController::class, 'addJobportalapplicants'])->name('add-jobportalapplicants');
    Route::get('jobportal-applicants/edit/{id}', [JobportalapplicantsController::class, 'Jobportalapplicants']);
    Route::post('edit-jobportalapplicants', [JobportalapplicantsController::class, 'editJobportalapplicants'])->name('edit-jobportalapplicants');
    Route::post('delete_jobportalapplicants', [JobportalapplicantsController::class, 'delete_jobportalapplicants'])->name('delete_jobportalapplicants');

    // jobportal-resumes

    Route::get('/jobportal-resumes', [JobportalresumesController::class, 'jobportalresumes'])->name('jobportal-resumes');
    Route::post('add-jobportalresumes', [JobportalresumesController::class, 'addJobportalresumes'])->name('add-jobportalresumes');
    Route::get('jobportal-resumes/edit/{id}', [JobportalresumesController::class, 'Jobportalresumes']);
    Route::post('edit-jobportalresumes', [JobportalresumesController::class, 'editJobportalresumes'])->name('edit-jobportalresumes');
    Route::post('delete_jobportalresumes', [JobportalresumesController::class, 'delete_jobportalresumes'])->name('delete_jobportalresumes');
    // jobportal-settings

    Route::get('/jobportal-settings', [JobportalsettingsController::class, 'jobportalsettings'])->name('jobportal-settings');
    Route::post('add-jobportalsettings', [JobportalsettingsController::class, 'addJobportalsettings'])->name('add-jobportalsettings');
    Route::get('jobportal-settings/edit/{id}', [JobportalsettingsController::class, 'Jobportalsettings']);
    Route::post('edit-jobportalsettings', [JobportalsettingsController::class, 'editJobportalsettings'])->name('edit-jobportalsettings');
    Route::post('delete_jobportalsettings', [JobportalsettingsController::class, 'delete_jobportalsettings'])->name('delete_jobportalsettings');
    // jobportal-settings

    Route::get('/app-chat', [AppchatController::class, 'appchat'])->name('app-chat');

    // app-contact

    Route::get('/app-contact', [AppcontactController::class, 'appcontact'])->name('app-contact');

    // app-calendar

    Route::get('/app-calendar', [AppcalendarController::class, 'appcalendar'])->name('app-calendar');
});



/****************************COMMON***********************************/



Route::get('forgot-password', [UserController::class, 'forgotPassord'])->name('forgot-password');






/*****************************ADMIN**********************************/





Route::get('admin', [AdminController::class, 'admin']);





Route::get('admin/login', [AdminController::class, 'index'])->name('login-admin');

Route::post('admin/admin-login', [AdminController::class, 'adminLogin'])->name('login.admin');



Route::get('admin/registration', [AdminController::class, 'registration'])->name('register-admin');

Route::post('admin/admin-registration', [AdminController::class, 'adminRegistration'])->name('register.admin');



Route::get('admin/signout', [AdminController::class, 'signOut'])->name('admin-signout');



Route::group(['middleware' => ['admin']], function () {





    Route::get('admin/view', [AdminController::class, 'view']);

    Route::get('admin/view/{any}', [AdminController::class, 'view']);



    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

    Route::get('admin/account', [AdminController::class, 'account'])->name('admin.account');

    Route::post('admin/account', [AdminController::class, 'account']);
});
