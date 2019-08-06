<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;

class RecrutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruits = Recruitment::with('department')->get();

        return view('recrut.index', compact('recruits'));
    }
}
