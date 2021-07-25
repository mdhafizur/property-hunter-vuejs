<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// auth routes
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Auth::routes(['verify' => true]);

Route::post('/users', [UserController::class, 'store']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::get('/users/search', [UserController::class, 'search']);
Route::put('/users', [UserController::class, 'update']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::post('/news', [NewsController::class, 'store']);
Route::put('/news', [NewsController::class, 'update']);
Route::delete('/news/{id}', [NewsController::class, 'destroy']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);

Route::post('/articles', [ArticleController::class, 'store']);
Route::put('/articles', [ArticleController::class, 'update']);
Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);

Route::post('/register', [RegisterController::class, 'create']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);




Route::group(['middleware' => ['json.response']], function () {
    // ...

    // Email
    Route::get('/email/resend', [VerificationController::class, 'resend']);
    Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');

    // Route::post('/forgot-password', [ResetPasswordController::class, 'forgotPassword']);
    Route::post('/password/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail']);
    Route::post('/password/reset', [ResetPasswordController::class, 'reset']);



    // OTP code
    Route::get('/otp/send', [VerificationController::class, 'sendOTP'])->middleware('verified');
    Route::get('/otp/verify/{code}', [VerificationController::class, 'verifyOTP']);

    //upload file
    Route::post('file/upload', [AttachmentController::class, 'store']);

    // tags api
    Route::post('/tags', [TagController::class, 'store']);
    Route::put('/tags', [TagController::class, 'update']);
    Route::delete('/tags/{id}', [TagController::class, 'destroy']);
    Route::get('/tags', [TagController::class, 'index']);
    Route::get('/tags/{alias}', [TagController::class, 'show']);

    Route::post('email/send', [EmailController::class, 'send']);
});




Route::any('{path}', function () {
    return response()->json([
        'message' => 'Route not found'
    ], 404);
})->where('path', '.*');
