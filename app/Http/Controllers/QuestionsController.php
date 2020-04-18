<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Quizsection;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions =question::all();

        return view('questions.index',['questions'=> $questions ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quizsection = quizsection ::where('id', Auth::user()->id );
        if(Auth::check()){
            $question = question ::create([
                'question' => $request->input('question'),
                'option1' => $request->input('option1'),
                'option2' => $request->input('option2'),
                'option3' => $request->input('option3'),
                'option4' => $request->input('option4'),
                'answer' => $request->input('answer'),
                'points' => $request->input('points'),
                'quizsection_id' => 1,
            ]);
            if( $question ){
                return redirect()->route('questions.create', ['question'=> $question])
                    ->with('success' , 'Quiz section created successfully');
            }
        }

        return back()->withInput()->with('errors', 'Error creating new company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $user = user::find($user->id );
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
