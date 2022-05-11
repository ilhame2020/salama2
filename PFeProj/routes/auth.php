<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\travailDController;
use App\Http\Controllers\TravailPController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DevoirController;
use App\Http\Controllers\CommentController;
Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

// Route::get('/login', [AuthenticatedSessionController::class, 'create'])
//                 ->middleware('guest')
//                 ->name('login');


// Route::post('/login', [AuthenticatedSessionController::class, 'store'])
//                 ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');


 

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');
             

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth');

//    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']) ->middleware('auth')              
//                  ->name('logout');

              //**********Routes etudiants****** */   
Route::get('/user/{idE}',[CustomAuthController::class, 'user'])->middleware('auth:web')->name('user.home');
Route::get('/login', [CustomAuthController::class, 'login'])->name('user.login');
Route::post('/login', [CustomAuthController::class, 'handleLogin'])->name('user.handleLogin');
Route::post('/user/logout', [AuthenticatedSessionController::class, 'destroy'])             
->name('user.logout');
Route::get('/user/cours/devoir/{id}',[CustomAuthController::class, 'rendre'])->middleware('auth:web')->name('user.cours.devoir');
Route::post('/user/cours/devoir/{id}',[DevoirController::class, 'remise'])->middleware('auth:web')->name('user.cours.devoir.remise');
Route::get('/user/cours/{id}',[CustomAuthController::class, 'coursUser'])->middleware('auth:web')->name('user.cours');
Route::get('/user/coursTp/{id}',[CustomAuthController::class, 'coursUser'])->middleware('auth:web')->name('user.coursTp');
              //**********Routes admins****** */   

Route::get('/admin',[CustomAuthController::class, 'admin'])->middleware('auth:webadmin')->name('admin.home');
Route::get('/admin/login', [CustomAuthController::class, 'loginAdmin'])->name('admin.login');
Route::post('/admin/login', [CustomAuthController::class, 'handleLoginAdmin'])->name('admin.handleLogin');
Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])        
->name('admin.logout');
Route::get('/admin/forgot-password', [PasswordResetLinkController::class, 'adminCreate'])
                ->middleware('guest')->name('admin.password.request');
Route::post('/admin/forgot-password', [PasswordResetLinkController::class, 'adminStore'])
                ->middleware('guest')->name('admin.password.email');   
Route::get('/admin/reset-password/{token}', [NewPasswordController::class, 'adminCreate'])
                ->middleware('guest')->name('admin.password.reset'); 
Route::post('/admin/reset-password', [NewPasswordController::class, 'adminStore'])
                ->middleware('guest')->name('admin.password.update');                   
//**********Routes prof****** */   

Route::get('/professeur-{id}',[CustomAuthController::class, 'homeProf'])->middleware('auth:webprof')->name('prof.home');
Route::get('/professeur/addTd',[CustomAuthController::class, 'addTd'])->name('prof.addTd');
Route::get('/professeur/gestionTp',[CustomAuthController::class, 'gestionTp'])->middleware('auth:webprof')->name('prof.gestionTp');
Route::get('/professeur/cours/{id}',[CustomAuthController::class, 'cours'])->middleware('auth:webprof')->name('prof.cours');
Route::get('/professeur/coursTp/{id}',[CustomAuthController::class, 'cours'])->middleware('auth:webprof')->name('prof.coursTp');
Route::get('/professeur/login', [CustomAuthController::class, 'loginProf'])->name('prof.login');
Route::post('/professeur/login', [CustomAuthController::class, 'handleLoginProf'])->name('prof.handleLogin');
Route::post('/professeur/logout', [AuthenticatedSessionController::class, 'destroy'])   
->name('prof.logout');
Route::get('/professeur/forgot-password', [PasswordResetLinkController::class, 'profCreate'])
                ->middleware('guest')->name('prof.password.request');
Route::post('/professeur/forgot-password', [PasswordResetLinkController::class, 'profStore'])
                ->middleware('guest')->name('prof.password.email');   
Route::get('/professeur/reset-password/{token}', [NewPasswordController::class, 'profCreate'])
                ->middleware('guest')->name('prof.password.reset'); 
Route::post('/professeur/reset-password', [NewPasswordController::class, 'profStore'])
                ->middleware('guest')->name('prof.password.update');   
Route::post('/professeur/Travd/{id}', [travailDController::class, 'newCours'])->name('prof.td');
Route::post('/professeur/Travp/{id}', [TravailPController::class, 'newT_pratique'])->name('prof.tp');
Route::post('/CreatePost/{id}', [PostController::class, 'postCreatePost'])->name('post.create');
Route::post('/CreateComment/{id}', [CommentController::class, 'createComment'])->name('comment.create');
Route::post('/CreateComment/{id}', [CommentController::class, 'createComment'])->name('comment.create');
Route::get('/professeur/devoir/{idc}', [DevoirController::class, 'devoir'])->middleware('auth:webprof')->name('prof.cours.devoir');
Route::post('/professeur/devoir/{id}', [DevoirController::class, 'create'])->middleware('auth:webprof')->name('prof.cours.devoir.create');
Route::get('/professeur/cours/archive/{id}',[CustomAuthController::class, 'archive'])->middleware('auth:webprof')->name('prof.cours.archive');
Route::get('/professeur/cours/list/{id}',[CustomAuthController::class, 'list'])->middleware('auth:webprof')->name('prof.cours.archive');
Route::get('/professeur/devoir/suivie/{id}',[CustomAuthController::class, 'suivie'])->middleware('auth:webprof')->name('prof.cours.devoir.suivie');
Route::get('/professeur/devoir/remis/{id}/{ids}',[CustomAuthController::class, 'remis'])->middleware('auth:webprof')->name('prof.cours.devoir.remis');
Route::get('/professeur/devoir/voir/{id}',[DevoirController::class, 'voir'])->middleware('auth:webprof')->name('prof.cours.devoir.voir');
Route::get('/professeur/devoir/modifier/{id}',[DevoirController::class, 'voir'])->middleware('auth:webprof')->name('prof.cours.devoir.mod');
Route::post('/professeur/devoir/modifier/{id}',[DevoirController::class, 'modifier'])->middleware('auth:webprof')->name('prof.cours.devoir.modifier');
Route::post('/professeur/devoir/supprimer/{id}',[DevoirController::class, 'supprimer'])->middleware('auth:webprof')->name('prof.cours.devoir.supprimer');



//   })->middleware(['auth:webadmin'])->name('dashboard');
//professuer routes 
