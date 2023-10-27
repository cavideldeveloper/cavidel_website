<?php

namespace Cavidel\Http\Controllers;

use Illuminate\Http\Request;
use Cavidel\ScreeningQuestionaire;
use Cavidel\Validator;

class ScreeningQuestionaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $screening  = ScreeningQuestionaire::all();

        return view('pages.screening_questionaire.index', compact('screening'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.screening_questionaire.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $validator = $this->validate($request, [
    //         'applicant_name'            => 'required',
    //         'email'                     => 'required|email',
    //         'phone'                     => 'required',
    //         'location'                  => 'required',
    //         'salary_expectation'        => 'required',
    //         'job_type'                  => 'required',
    //         'stack_option'              => 'required',
    //         'post_school_obligations'   => 'required',
    //         'work_engagement'           => 'required',
    // ]);

    // if ($validator->fails()) {
    //     return redirect()->back()->withInput()->withErrors($validator);
    // }

    $screening = new ScreeningQuestionaire($request->all());
    $screening->save();

    return redirect()->route('thank_you')->with('success', 'Created successfully');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_thanks()
    {
        return view('pages.Screening_questionaire.thank_you');
    }
}
