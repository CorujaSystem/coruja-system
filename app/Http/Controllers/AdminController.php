<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function indexSchools(Request $request)
    {
        $sort = $request->query('sort');
        $schools = School::all()->sortBy($sort);
        return view('admin.schools', ['schools' => $schools, 'sort' => $sort]);
    }
    public function showSchool($schoolId)
    {
        $school = School::find($schoolId);
        $students = Student::where('school_id', $schoolId)->get();


        return view('admin.school', ['students' => $students, 'school' => $school]);
    }


    public function register()
    {
        return View('school-form');
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

        return redirect('/admin');
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

        $school->save();

        return redirect("/admin");

    }
}
