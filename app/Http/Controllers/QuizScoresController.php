<?php

namespace App\Http\Controllers;

use App\Models\QuizScores;
use Illuminate\Http\Request;

use Auth;

class QuizScoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function uploadScore(Request $request)
    {
        $score = new QuizScores();
        $score->user_id = Auth::id();
        $score->score = $request['Score'];
        $score->lesson = $request['Lesson']; 
        $score->save();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuizScores  $quizScores
     * @return \Illuminate\Http\Response
     */
    public function show(QuizScores $quizScores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuizScores  $quizScores
     * @return \Illuminate\Http\Response
     */
    public function edit(QuizScores $quizScores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuizScores  $quizScores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuizScores $quizScores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuizScores  $quizScores
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuizScores $quizScores)
    {
        //
    }
}
