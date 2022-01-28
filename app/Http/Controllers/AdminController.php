<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function index()
    {
        $allKitsCount = Student::all()->count();
        $finishedKitsCount = Student::all()->where('is_kit_done', true)->count();

        $pendingKitsCount = $allKitsCount - $finishedKitsCount;

        $schools = School::withCount(['students', 'students as students_with_kit_count' => function(Builder $query){
            $query->where('is_kit_done', true);
        }])->get();

        $maleKitsCount = Student::all()->where('gender', 'masculino')->where('is_kit_done', false)->count();
        $femaleKitsCount = Student::all()->where('gender', 'feminino')->where('is_kit_done', false)->count();

        $allKitsData = [$finishedKitsCount, $pendingKitsCount] ;
        $genderKitsData = [$maleKitsCount, $femaleKitsCount];


        // Group all students by grade and return grade count
        $studentsByGrade = Student::all()->where('is_kit_done', false)->sortBy('grade')->groupBy('grade');
        $studentsByGradeCount = [];
        $studentsByGradeLabel = [];
        foreach ($studentsByGrade as $grade => $students) {
            $studentsByGradeCount[] = $students->count();
            $studentsByGradeLabel[] = $grade;
        }

        $schoolKitsData = [];
        $schoolLabels = [];
        $schoolAllKitsData = [];


        foreach ($schools as $school) {
            $schoolKitsData[] = $school->students_with_kit_count;
            $schoolAllKitsData[] = $school->students_count;
            $schoolLabels[] = $school->name;
        }

        return view('admin.index', [
            'allKitsData' => json_encode($allKitsData),
            'genderKitsData' => json_encode($genderKitsData),
            'schoolKitsData' => json_encode($schoolKitsData),
            'schoolAllKitsData' => json_encode($schoolAllKitsData),
            'schoolLabels' => json_encode($schoolLabels),
            'schoolCount' => count($schoolLabels),
            'studentsByGradeCount' => json_encode($studentsByGradeCount),
            'studentsByGradeLabel' => json_encode($studentsByGradeLabel)
        ]);
    }

    public function indexSchools(Request $request)
    {
        $sort = $request->query('sort') ?? 'id';
        $direction = $request->query('direction') ?? 'asc';

        $schools = School::all()->where('deleted_at', null)->sortBy($sort, null, $direction == 'desc');
        return view('admin.schools', ['schools' => $schools, 'sort' => $sort, 'direction' => $direction]);
    }
    public function showSchool(Request $request, $schoolId)
    {
        $sort = $request->query('sort') ?? 'id';
        $direction = $request->query('direction') ?? 'asc';

        $school = School::find($schoolId);
        $students = Student::all()->where('school_id', $schoolId)->sortBy($sort, null, $direction == 'desc');

        return view('admin.school', ['students' => $students, 'school' => $school,  'sort' => $sort, 'direction' => $direction]);
    }


    public function register()
    {
        return View('school-form');
    }
    public function remove($schoolId)
    {
        $school = School::find($schoolId);
        $school->deleted_at = now();
        $school->save();
        return Redirect::back();
    }
    public function insertSchool(Request $request)
    {
        $name = $request->post('name');
        $address = $request->post('address');
        $email = $request->post('email');
        $communication = $request->post('communication_responsible');
        $tel = $request->post('tel');

        $school = new School;

        $school->name = $name;
        $school->address = $address;
        $school->email = $email;
        $school->communication_responsible = $communication;
        $school->tel = $tel;

        $school->save();

        $user = new User;

        $school_name = $school->name;

        $user->name = $school_name;
        $user->school_id = $school->id;
        $user->email = str_replace(" ", "", strtolower($school_name)) . "@donacoruja.org";
        $user->password = Hash::make($request->post('password'));
        $user->save();

        return redirect('/admin/escola');
    }


    public function update($schoolId)
    {
        $school = School::find($schoolId);
        return View('school-form', ['school' => $school]);
    }

    public function saveSchool(Request $request)
    {
        $schoolId = $request->post('schoolId');
        $name = $request->post('name');
        $address = $request->post('address');
        $email = $request->post('email');
        $communication = $request->post('communication_responsible');
        $tel = $request->post('tel');

        $school = School::find($schoolId);

        $school->name = $name;
        $school->address = $address;
        $school->email = $email;
        $school->communication_responsible = $communication;
        $school->tel = $tel;

        $user = User::where('school_id', $schoolId)->first();

        $user->email = str_replace(" ", "", strtolower($name)) . "@donacoruja.org";
        if($request->post('password') != ""){
            $user->password = Hash::make($request->post('password'));
        }
        $school->save();
        $user->save();

        return redirect("/admin/escola");

    }
}
