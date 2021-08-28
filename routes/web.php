<?php

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NoteController;
use App\Http\Controllers\Backend\Profile\ProfileController;
use App\Http\Controllers\Backend\User\SocialLoginController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\HomeController;
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
//require __DIR__.'/auth.php';
//
Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('/admin/settings', function () {
    return view('dashboard');
})->name('dashboard');


// this route for user and admin
Route::middleware(['auth:sanctum','verified'])->group(function() {
    Route::get('/profile/edit', [UserController::class, 'profileEdit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'profileUpdate'])->name('profile.update');

    Route::get('/', [NoteController::class, 'index'])->name('note.index');
    Route::post('/user/note', [NoteController::class, 'store'])->name('note.store');
    Route::get('/user/note/delete/{id}', [NoteController::class, 'destroy'])->name('note.delete');
    Route::post('/user/note/update', [NoteController::class, 'update'])->name('note.update');

});


// this route for only admin

Route::middleware(['auth:sanctum','verified','authadmin'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');

    Route::get('/user/add', [UserController::class, 'userRegisterForm'])->name('user.add.get');
    Route::post('/user/add', [UserController::class, 'userStore'])->name('user.add.post');
    Route::get('/user/manage', [UserController::class, 'userList'])->name('user.manage');
    Route::get('/user/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');
    Route::post('/user/update', [UserController::class, 'userUpdate'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'userDelete'])->name('user.delete');
    Route::get('/user/admin/list', [UserController::class, 'adminList'])->name('admin.get');
});



// routes for user login
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::get('/register', [AuthController::class, 'registerForm'])->name('register');


// routes for user login
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::get('/reset-password/{token}', [AuthController::class, 'resetPassword'])->name('password.reset');





// routes for Google login
Route::get('/auth/google/redirect', [SocialLoginController::class, 'googleRedirect'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialLoginController::class, 'googleCallback'])->name('google.callback');

// routes for Facebook login
Route::get('/auth/facebook/redirect', [SocialLoginController::class, 'facebookRedirect'])->name('facebook.redirect');
Route::get('/auth/facebook/callback', [SocialLoginController::class, 'facebookCallback'])->name('facebook.callback');


/////////////// this is route for preview template //////////////////
 //Dashboard Routes
Route::group(['prefix' => 'static-mode'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
Route::get('/', [HomeController::class, 'index'])->name('dashboard.1');

Route::get('/page-new-notes', [HomeController::class, 'Newnotes'])->name('newnotes');
Route::get('/page-bin', [HomeController::class, 'Bin'])->name('bin');
Route::get('/page-reminder', [HomeController::class, 'Reminder'])->name('reminder');


//Notebook Main Page Routes
Route::group(['prefix' => 'notebooks'], function() {
    Route::get('/page-project-plans', [HomeController::class, 'ProjectPlans'])->name('projectplans');
    Route::get('/page-routine-notes', [HomeController::class, 'ProjectRoutine'])->name('projectroutine');
    Route::get('/page-planning', [HomeController::class, 'Planning'])->name('planning');
});

//App Details Pages Routes
Route::group(['prefix' => 'app'], function() {

    //Userdetail Page Routes
    Route::get('user/profile', [HomeController::class, 'userprofile'])->name('app.userdetail.userprofile');
    Route::get('user/add', [HomeController::class, 'useradd'])->name('app.userdetail.useradd');
    Route::get('user/userlist', [HomeController::class, 'userList'])->name('app.userdetail.userlist');
    Route::get('user/profile-edit', [HomeController::class, 'userprofileEdit'])->name('app.userdetail.profileedit');
    Route::get('user/account-setting', [HomeController::class, 'useraccountSettings'])->name('app.userdetail.accountsetting');
    Route::get('user/privacy-setting', [HomeController::class, 'userprivacySettings'])->name('app.userdetail.privacysetting');
});

//UI Pages Routes
Route::group(['prefix' => 'ui'], function() {
    Route::get('avatars', [HomeController::class, 'UiAvatars'])->name('ui.avatars');
    Route::get('alerts', [HomeController::class, 'UiAlerts'])->name('ui.alerts');
    Route::get('badges', [HomeController::class, 'UiBadges'])->name('ui.badges');
    Route::get('breadcrumb', [HomeController::class, 'UiBreadcrumb'])->name('ui.breadcrumb');
    Route::get('buttons', [HomeController::class, 'UiButtons'])->name('ui.buttons');
    Route::get('buttongroup', [HomeController::class, 'UiButtongroup'])->name('ui.buttongroup');
    Route::get('boxshadows', [HomeController::class, 'UiBoxshadows'])->name('ui.boxshadows');
    Route::get('colors', [HomeController::class, 'UiColors'])->name('ui.colors');
    Route::get('cards', [HomeController::class, 'UiCards'])->name('ui.cards');
    Route::get('carousel', [HomeController::class, 'UiCarousel'])->name('ui.carousel');
    Route::get('grid', [HomeController::class, 'UiGrid'])->name('ui.grid');
    Route::get('helperclass', [HomeController::class, 'UiHelperClass'])->name('ui.helperclass');
    Route::get('images', [HomeController::class, 'UiImages'])->name('ui.images');
    Route::get('listgroup', [HomeController::class, 'UiListgroup'])->name('ui.listgroup');
    Route::get('media', [HomeController::class, 'UiMedia'])->name('ui.media');
    Route::get('modal', [HomeController::class, 'UiModal'])->name('ui.modal');
    Route::get('notification', [HomeController::class, 'UiNotification'])->name('ui.notification');
    Route::get('pagination', [HomeController::class, 'UiPagination'])->name('ui.pagination');
    Route::get('popovers', [HomeController::class, 'UiPopovers'])->name('ui.popovers');
    Route::get('progressbars', [HomeController::class, 'UiProgressbars'])->name('ui.progressbars');
    Route::get('typography', [HomeController::class, 'UiTypography'])->name('ui.typography');
    Route::get('tabs', [HomeController::class, 'UiTabs'])->name('ui.tabs');
    Route::get('tooltips', [HomeController::class, 'UiTooltips'])->name('ui.tooltips');
    Route::get('video', [HomeController::class, 'UiVideo'])->name('ui.video');
});

//Pricing pages Routs
Route::group(['prefix' => 'pricing'], function() {
    Route::get('pricing1', [HomeController::class, 'Pricing1'])->name('pricing.pricing1');
    Route::get('pricing2', [HomeController::class, 'Pricing2'])->name('pricing.pricing2');
});


//Auth pages Routes
Route::group(['prefix' => 'auth'], function() {
    // Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
    // Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
    Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
    Route::get('confirm-email', [HomeController::class, 'authConfirmEmail'])->name('auth.confirm-email');
    Route::get('lock-screen', [HomeController::class, 'authlockScreen'])->name('auth.lock-screen');
});


//Extra pages Routes
Route::group(['prefix' => 'extra'], function() {
    //Timeline Page Routes
    Route::get('timeline/timeline1', [HomeController::class, 'timeline1'])->name('timeline.timeline1');
    Route::get('timeline/timeline2', [HomeController::class, 'timeline2'])->name('timeline.timeline2');

    //Error pages Routes
    Route::get('error/error404', [HomeController::class, 'Error404'])->name('pageError.error404');
    Route::get('error/error500', [HomeController::class, 'Error500'])->name('pageError.error500');

    Route::get('blankpage', [HomeController::class, 'ExtrapagesBlankpage'])->name('extrapages.blankpage');
    Route::get('maintenance', [HomeController::class, 'ExtrapagesMaintenance'])->name('extrapages.maintenance');
});
});
