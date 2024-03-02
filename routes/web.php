<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
    AuthController,
    DashboardController,
    UsersController,
    TeenPattiController,
    PaymentHistoryController,
    LeaderBoardController,
    NotificationController,
    ComissionController,
    AppBannerController,
    SettingController
};

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

Route::get('/', function () {
    return view('welcome');
});


// Admin routes
Route::name('admin.')->prefix('admin')->controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('post-login','postLogin')->name('login.post');
    Route::get('forget-password', [AuthController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::name('admin.')->prefix('admin')->controller(DashboardController::class)->middleware('web')->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout', 'logout')->name('logout');
});

Route::name('admin.user.')->prefix('admin/user')->controller(UsersController::class)->middleware('web')->group(function () {
    Route::get('list', 'list')->name('list');
    Route::get('add-bot', 'addBot')->name('add.bot');
    Route::get('view/{id}', 'view')->name('view');
    Route::get('category-list', 'user_category_list')->name('category.list');
    Route::get('add-category', 'addCategory')->name('add.category');
    Route::get('kyc', 'UserKyc')->name('kyc');
    Route::get('user-bank', 'UserBank')->name('bank');
});


Route::name('admin.teenpatti.')->prefix('admin/teenpatti')->controller(TeenPattiController::class)->middleware('web')->group(function () {
    Route::get('tableMaster', 'tableMaster')->name('tableMaster');
    Route::get('tableAdd', 'tableAdd')->name('tableAdd');
    Route::get('tableEdit/{id}', 'tableEdit')->name('tableEdit');
    Route::get('gameHistory', 'gameHistory')->name('gameHistory');
    Route::get('watchTable', 'watchTable')->name('watchTable');
    Route::get('Jackpot', 'jackpot')->name('Jackpot');
    Route::get('RobotCards', 'RobotCards')->name('RobotCards');
});


Route::name('admin.payment.')->prefix('admin/payment')->controller(PaymentHistoryController::class)->middleware('web')->group(function () {
    Route::get('list', 'list')->name('list');
});

Route::name('admin.leader.board.')->prefix('admin/leaderboard')->controller(LeaderBoardController::class)->middleware('web')->group(function () {
    Route::get('list', 'list')->name('list');
});

Route::name('admin.notification.')->prefix('admin/notification')->controller(NotificationController::class)->middleware('web')->group(function () {
    Route::get('list', 'list')->name('list');
});

Route::name('admin.comission.')->prefix('admin/comission')->controller(ComissionController::class)->middleware('web')->group(function () {
    Route::get('list', 'list')->name('list');
});

Route::name('admin.app.banner.')->prefix('admin/app/banner')->controller(AppBannerController::class)->middleware('web')->group(function () {
    Route::get('list', 'list')->name('list');
    Route::get('add', 'add')->name('add');
    Route::get('edit/{id}', 'edit')->name('edit');
});

Route::name('admin.setting.')->prefix('admin/setting')->controller(SettingController::class)->middleware('web')->group(function () {
    Route::get('edit', 'edit')->name('edit');
});

