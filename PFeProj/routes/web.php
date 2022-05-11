<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/',function(){
    return view('presentative.index');
})->name('presentatif');
//qr
Route::get('/question_de_redaction/{id}','App\Http\Controllers\Exam\QrController@createFormQr')->middleware('auth:webprof')->name('qr.get');
Route::post('/question_de_redaction_create','App\Http\Controllers\Exam\QrController@createQr')->middleware('auth:webprof')->name('qr.createQr');

//qcm
Route::get('/question_choix_multiple/{id}','App\Http\Controllers\Exam\QcmsController@createFormQcm')->middleware('auth:webprof')->name('quiz.ListAll');
Route::post('/question_choix_multiple_create','App\Http\Controllers\Exam\QcmsController@QcmForm')->middleware('auth:webprof')->name('qcm.QcmForm'); //href="{{route("qcm.post")}}"

//quiz
Route::get('/quizes/create/{id}','App\Http\Controllers\Exam\QuizController@createForm')->middleware('auth:webprof')->name('quiz.display');
Route::post('/quizes/{id}', 'App\Http\Controllers\Exam\QuizController@QuizForm')->middleware('auth:webprof')->name('quiz.store');
Route::get('/quizes/list/{id}','App\Http\Controllers\Exam\QuizController@ListAll')->middleware('auth:webprof')->name('quiz.ListAll');
Route::delete('/quizes/supprimer/{id}','App\Http\Controllers\Exam\QuizController@SuppQuiz')->middleware('auth:webprof')->name('quiz.SuppQuiz');
Route::delete('/quizes/supprimerqcm/{id}','App\Http\Controllers\Exam\QuizController@SuppQcm')->middleware('auth:webprof')->name('qcm.SuppQcm');
Route::delete('/quizes/supprimerqr/{id}','App\Http\Controllers\Exam\QuizController@SuppQr')->middleware('auth:webprof')->name('qr.SuppQr');


Route::get('/admin/professeur','App\Http\Controllers\Admin\AdminController@ListAllProf')->name('admin.ListAllProf');
Route::post('/admin/professeur/ajouter','App\Http\Controllers\Admin\AdminController@CreateProf')->name('admin.CreateProf');
Route::delete('/admin/professeur/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppProf')->name('admin.SuppProf');
Route::post('/admin/professeur/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateProf')->name('admin.updateProf');


//etudiant
Route::get('/admin/etudiant','App\Http\Controllers\Admin\AdminController@ListAllEtud')->name('admin.ListAllEtud');
Route::post('/admin/etudiant/ajouter','App\Http\Controllers\Admin\AdminController@CreateEtudiant')->name('admin.CreateEtudiant');
Route::delete('/admin/etudiant/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppEtudiant')->name('admin.SuppEtudiant');
Route::post('/admin/etudiant/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateEtudiant')->name('admin.updateEtudiant');

//section 

Route::get('/admin/section','App\Http\Controllers\Admin\AdminController@ListAllSect')->name('admin.ListAllSect');
Route::post('/admin/section/ajouter','App\Http\Controllers\Admin\AdminController@CreateSection')->name('admin.CreateSection');
Route::delete('/admin/section/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppSection')->name('admin.SuppSection');
Route::post('/admin/section/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateSection')->name('admin.updateSection');

//groupe de tp 

Route::get('/admin/groupe_tp','App\Http\Controllers\Admin\AdminController@ListAllGrp')->name('admin.ListAllGrp');
Route::post('/admin/groupe_tp/ajouter','App\Http\Controllers\Admin\AdminController@CreateGroupe')->name('admin.CreateGroupe');
Route::delete('/admin/groupe_tp/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppGroupe')->name('admin.SuppGroupe');
Route::post('/admin/groupe_tp/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateGroupe')->name('admin.updateGroupe');


//professuer routes 
Route::get('/admin/professeur','App\Http\Controllers\Admin\AdminController@ListAllProf')->name('admin.ListAllProf');
Route::post('/admin/professeur/ajouter','App\Http\Controllers\Admin\AdminController@CreateProf')->name('admin.CreateProf');
Route::delete('/admin/professeur/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppProf')->name('admin.SuppProf');
Route::post('/admin/professeur/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateProf')->name('admin.updateProf');


//etudiant
Route::get('/admin/etudiant','App\Http\Controllers\Admin\AdminController@ListAllEtud')->name('admin.ListAllEtud');
Route::post('/admin/etudiant/ajouter','App\Http\Controllers\Admin\AdminController@CreateEtudiant')->name('admin.CreateEtudiant');
Route::delete('/admin/etudiant/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppEtudiant')->name('admin.SuppEtudiant');
Route::post('/admin/etudiant/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateEtudiant')->name('admin.updateEtudiant');

//section 

Route::get('/admin/section','App\Http\Controllers\Admin\AdminController@ListAllSect')->name('admin.ListAllSect');
Route::post('/admin/section/ajouter','App\Http\Controllers\Admin\AdminController@CreateSection')->name('admin.CreateSection');
Route::delete('/admin/section/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppSection')->name('admin.SuppSection');
Route::post('/admin/section/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateSection')->name('admin.updateSection');

//groupe de tp 

Route::get('/admin/groupe_tp','App\Http\Controllers\Admin\AdminController@ListAllGrp')->name('admin.ListAllGrp');
Route::post('/admin/groupe_tp/ajouter','App\Http\Controllers\Admin\AdminController@CreateGroupe')->name('admin.CreateGroupe');
Route::delete('/admin/groupe_tp/supprimer/{id}','App\Http\Controllers\Admin\AdminController@SuppGroupe')->name('admin.SuppGroupe');
Route::post('/admin/groupe_tp/modifier/{id}','App\Http\Controllers\Admin\AdminController@updateGroupe')->name('admin.updateGroupe');
//****la route dashboard existe dans la vue welcome* */
  // Route::get('/dashboard', function () {
  //     return view('user.site');
  // });
//   Route::get('/dashboard', function () {
//     return view('user.home');
// })->middleware(['auth:webprof'])->name('dashboard');
//    Route::get('/dashboard', function () {
//     return view('admin.admin');

//nouveau  
Route::get('/quizes/download/{id}','App\Http\Controllers\Exam\QuizController@Download')->name('quiz.Download');
//examin ation
Route::get('/test','App\Http\Controllers\Exam\PasserQuizController@passerForm');
Route::post('/test/test','App\Http\Controllers\Exam\PasserQuizController@StoreReponse')->name('passer.StoreReponse');



 //pour le lien se connecter et dashboard 
  require __DIR__.'/auth.php';
