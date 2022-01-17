<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class AdminController extends Controller
{
    public function index()
    {

        $schools = School::all();

        return view('admin.dashboard', ['schools' => $schools]);
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

        return redirect('/');
    }
}
