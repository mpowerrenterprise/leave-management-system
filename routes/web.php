<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatabaseController;

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

Route::get('/',[PageController::class, 'ViewLoginPageController']);

Route::post('/handle-login',[LoginController::class, 'HandleLoginContoller']);

Route::get('/view-home-page',[PageController::class, 'ViewHomePageController']);

Route::get('/handle-logout',[LoginController::class, 'HandleLogoutContoller']);

Route::get('/view-staff-management-index',[PageController::class, 'ViewStaffManagementIndexController']);

Route::post('/insert-staff-data',[DatabaseController::class, 'InsertStaffData']);

Route::get('/delete-staff-data/{auto_id}',[DatabaseController::class, 'DeleteStaffData']);

Route::get('/view-staff-management-edit/{auto_id}',[PageController::class, 'ViewStaffManagementEditController']);

Route::post('/update-staff-data',[DatabaseController::class, 'UpdateStaffData']);

Route::get('/view-settings-index',[PageController::class, 'ViewSettingsPageContoller']);

Route::post('/change-username',[DatabaseController::class, 'ChangeUsername']);

Route::post('/change-password',[DatabaseController::class, 'ChangePassword']);

Route::get('/view-user-accounts-index',[PageController::class, 'ViewUserAccountsIndexContoller']);
?>
