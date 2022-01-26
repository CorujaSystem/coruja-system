<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\StudentForm;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/sobre', function () {
    return view('about');
});

Route::group(['prefix' => 'admin','middleware' => ['isAdmin']], function (){

    Route::get('/', [AdminController::class, 'index']);

    Route::get('/registrar', [AdminController::class, 'register']);

    Route::post('/registrar/salvar', [AdminController::class, 'insertSchool'])->name('salvar-escola');
});

Route::prefix('/escola')->group(function (){
    Route::get('/registrar', StudentForm::class);

    Route::post('registrar/salvar', function (Request $request) {

        $user = auth()->user();

        $name = $request->post('name');
        $gender = $request->post('gender');
        $tel = $request->post('tel');
        $responsible = $request->post('responsible');
        $observation = $request->post('observation');

        $student = new Student;

        $student->name = $name;
        $student->gender = $gender;
        $student->tel = $tel;
        $student->responsible = $responsible;
        $student->observation = $observation;
        $student->school_id = $user->school_id;
        $student->save();

        return redirect('/');
    })->name('salvar-estudante');
});
