<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\School;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\YearProductionController;
use App\Http\Livewire\StudentForm;
use App\Models\YearProduction;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/redirect-user', function(Request $request){
    $user = $request->user();

    if($user->is_admin) {
        return Redirect::to('/admin');
    }
    if($user->school_id) {
        return Redirect::to('/escola/registrar');
    }

    return Redirect::to('/');
});

Route::get('/', function () {
    $yearProductions = YearProduction::all()->sortBy('year');

    $yearProductionsData = [];
    $yearProductionsLabels = [];

    foreach ($yearProductions as $yearProduction) {
        $yearProductionsData[] = $yearProduction->production;
        $yearProductionsLabels[] = $yearProduction->year;
    }

    return view('welcome', [
        'yearProductionsData' => json_encode($yearProductionsData),
        'yearProductionsLabels' => json_encode($yearProductionsLabels)
    ]);
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/sobre', function () {
    return view('about');
});

Route::group(['prefix' => 'admin'], function (){
    Route::get('/', [AdminController::class, 'index'])->middleware(['isAdmin']);
    Route::get('/registrar', [AdminController::class, 'register'])->middleware(['isAdmin']);
    Route::post('/registrar/salvar', [AdminController::class, 'insertSchool'])->name('salvar-escola')->middleware(['isAdmin']);
    Route::get('/editar/{schoolId}', [AdminController::class, 'update'])->middleware(['isAdmin']);
    Route::get('/remover/{schoolId}', [AdminController::class, 'remove'])->middleware(['isAdmin']);
    Route::post('/editar/{schoolId}/salvar', [AdminController::class, 'saveSchool'])->middleware(['isAdmin']);
});

Route::prefix('/admin/anos')->group(function() {
    Route::get('/', [YearProductionController::class, 'index'])->middleware(['isAdmin']);
    Route::post('/registrar', [YearProductionController::class, 'store'])->middleware(['isAdmin']);
    Route::post('/atualizar/{yearProductionId}', [YearProductionController::class, 'update'])->middleware(['isAdmin']);
    Route::get('/remover/{yearProductionId}', [YearProductionController::class, 'remove'])->middleware(['isAdmin']);
});

Route::prefix('/escola')->group(function (){
    Route::get('/registrar', StudentForm::class);
});

Route::prefix('/admin/escola')->group(function (){
    Route::get('/', [AdminController::class, 'indexSchools'])->middleware(['isAdmin']);
    Route::get('/{schoolId}', [AdminController::class, 'showSchool'])->middleware(['isAdmin']);
    Route::get('/{schoolId}/registrar', function ($schoolId){
        $school = School::find($schoolId);
        return View('student-form', ['school' => $school]);
    })->middleware(['isAdmin']);

    Route::get('/{schoolId}/editar/{studentId}', function ($schoolId, $studentId){
        $school = School::find($schoolId);
        $student = Student::find($studentId);

        return View('student-form', ['school' => $school, 'student' => $student]);
    })->middleware(['isAdmin']);

    Route::get('/{schoolId}/remover/{studentId}', function ($schoolId, $studentId){
        $student = Student::find($studentId);
        $student->delete();

        return Redirect::back();
    })->middleware(['isAdmin']);

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
    })->name('salvar-estudante')->middleware(['isAdmin']);

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
    })->middleware(['isAdmin']);

    Route::post('/{schoolId}/kit/{studentId}', function(Request $request, $schoolId, $studentId){
        $kitDone = $request->post('kit');
        $student = Student::find($studentId);
        $student->is_kit_done = $kitDone ? 'true' : 'false';
        $student->save();
        return Redirect::back();
    })->middleware(['isAdmin']);
});
