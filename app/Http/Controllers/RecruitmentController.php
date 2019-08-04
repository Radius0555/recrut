<?php

namespace App\Http\Controllers;

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
        $recruitment = Recruitment::all();

        return view('recruitment.index', compact('recruitment'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $recruitment = new Recruitment;

        $pathCV = $request->input('pathCV');
        $pathDoc = $request->input('pathDoc');

        $recruitment->firstName = $request->input('firstName');
        $recruitment->lastName = $request->input('lastName');
        $recruitment->telephone = $request->input('telephone');
        $recruitment->email = $request->input('email');
        $recruitment->area = $request->input('area');
        $recruitment->pathCV = $pathCV->getRealPath();
        $recruitment->pathDoc = $pathDoc->getRealPath();
        $recruitment->info = $request->input('info');

        $recruitment->save();
        return redirect()->route('recruitment.info');
    }
}