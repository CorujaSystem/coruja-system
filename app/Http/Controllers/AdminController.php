<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function indexSchools()
    {

        $schools = School::all();

        return view('admin.schools', ['schools' => $schools]);
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

        return redirect('/');
    }
}
