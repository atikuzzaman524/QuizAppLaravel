<?php

namespace App\Http\Controllers;

use App\Quizsection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizsectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $quizsections = quizsection::all();

        return view('quizsections.index',['quizsections'=> $quizsections]);


    }


    public function quizzes(){
        if( Auth::check() ){
            $quizsectionall = quizsection::where('user_id', Auth::user()->id)->get();
            return view('explore', ['quizsectionall'=> $quizsectionall]);
        }
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

//        echo '<pre>';
//        var_dump(session('abc'));
//        echo '</pre>';
//        exit;
        return view('quizsections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if(Auth::check()){
            $quizsection = quizsection::create([
                'title' => $request->input('title'),
                'category' => $request->input('category'),
                'user_id' => Auth::user()->id,
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
                'details' => $request->input('details'),
            ]);

//            echo '<pre>';
//            var_dump($quizsection);
//            echo '</pre>';
//            exit;
            if( $quizsection){
                return redirect()->route('questions.create',[$quizsection->id])
                    ->with('success' , 'Quiz section created successfully');
            }
        }

        return back()->withInput()->with('errors', 'Error creating new Quiz Section');
    }

    /**
     * Display the specified resource.
     *{{$user->id}}
     * @param  \App\Quizsection  $quizsection
     * @return \Illuminate\Http\Response
     */
    public function show(Quizsection $quizsection)
    {
        $questions = quizbuz::table('quizsections')
            ->join( 'questions','quizsections.id', '=', 'questions.quizsection_id')
            ->find($quizsection->id )
            ->get();

        return view('$quizsections.show',['$questions'=>$questions]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quizsection  $quizsection
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizsection $quizsection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quizsection  $quizsection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quizsection $quizsection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quizsection  $quizsection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quizsection $quizsection)
    {
        //
    }
}
