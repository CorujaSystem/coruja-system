<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\School;
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

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/registrar', [AdminController::class, 'register']);
    Route::post('/registrar/salvar', [AdminController::class, 'insertSchool'])->name('salvar-escola');
    Route::get('/editar/{schoolId}', [AdminController::class, 'update']);
    Route::post('/editar/{schoolId}/salvar', [AdminController::class, 'saveSchool']);
});


Route::prefix('/escola')->group(function (){
    Route::get('/registrar', StudentForm::class);
});

Route::prefix('/admin/escola')->group(function (){
    Route::get('/', [AdminController::class, 'indexSchools']);
    Route::get('/{schoolId}', [AdminController::class, 'showSchool']);
    Route::get('/{schoolId}/registrar', function ($schoolId){
        $school = School::find($schoolId);
        return View('student-form', ['school' => $school]);
    });

    Route::get('/{schoolId}/editar/{studentId}', function ($schoolId, $studentId){
        $school = School::find($schoolId);
        $student = Student::find($studentId);

        return View('student-form', ['school' => $school, 'student' => $student]);
    });

    Route::post('/{schoolId}/registrar/salvar', function (Request $request, $schoolId) {
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
        $student->school_id = $schoolId;
        $student->save();

        return redirect('/admin/escola/' . $schoolId);
    })->name('salvar-estudante');

    Route::post('/{schoolId}/editar/{studentId}/salvar', function (Request $request, $schoolId, $studentId) {
        $student = Student::find($studentId);

        $name = $request->post('name');
        $gender = $request->post('gender');
        $tel = $request->post('tel');
        $responsible = $request->post('responsible');
        $observation = $request->post('observation');

        $student->name = $name;
        $student->gender = $gender;
        $student->tel = $tel;
        $student->responsible = $responsible;
        $student->observation = $observation;
        $student->save();

        return redirect('/admin/escola/' . $schoolId);
    });
});
