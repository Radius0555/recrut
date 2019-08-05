<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Recruitment;
use App\Http\Requests\Recrut\CreateRequest;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();

        return view('recruitment.index', compact('departments'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function info()
    {
        return view('recruitment.info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $recruitment = new Recruitment();

        $pathCV = $request->file('pathCV');
        $pathDoc = $request->file('pathDoc');

        $pathCV->store('local');
        if ($pathDoc) {
            $pathDoc->store('local');
        }

        $recruitment->firstName = $request->input('firstName');
        $recruitment->lastName = $request->input('lastName');
        $recruitment->telephone = $request->input('telephone');
        $recruitment->email = $request->input('email');
        $recruitment->department_id = $request->input('department_id');
        $recruitment->pathCV = $request->pathCV->path();
        if($pathDoc){
            $recruitment->pathDoc = $request->pathDoc->path();
        }

        $recruitment->info = $request->input('info');
        $recruitment->save();
        return redirect()->route('recruitment.info', ['pathCV', 'pathDoc']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Recruitment $recruitment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruitment $recruitment)
    {
        $recruitment->delete();

        return redirect()->route('recrut.index');
    }
}