<?php

namespace App\Http\Controllers;

use App\Models\QuizScores;
use Illuminate\Http\Request;

use Auth;
use DB;

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
        $lessonTitle = $request->Lesson;
        $lessonExists = DB::table('quiz_scores')->where('user_id', Auth::id())
                                        ->where('lesson', $lessonTitle)
                                        ->value('lesson');
        if($lessonTitle == $lessonExists) {
            DB::table('quiz_scores')->where('user_id', Auth::id())
                                    ->where('lesson', $lessonTitle)
                                    ->update(['score' => $request->Score]);
        }else {                                
            $score->user_id = Auth::id();
            $score->score = $request['Score'];
            $score->lesson = $request['Lesson']; 
            $score->save();
        }

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function retrieveScores(Request $request)
    {
        $user_id = Auth::id();
        $htmlData = DB::table('quiz_scores')->where('user_id', Auth::id())
                                            ->where('lesson', 'LIKE', '%HTML%')
                                            ->orderBy('lesson', 'ASC')
                                            ->get('score');
        $cssData = DB::table('quiz_scores')->where('user_id', Auth::id())
                                           ->where('lesson', 'LIKE', '%CSS%')
                                           ->orderBy('lesson', 'ASC')
                                           ->get('score');
        $jsData = DB::table('quiz_scores')->where('user_id', Auth::id())
                                          ->where('lesson', 'LIKE', '%JAVASCRIPT%')
                                          ->orderBy('lesson', 'ASC')
                                          ->get('score');
        return response()->json(
            [
                $htmlData,
                $cssData,
                $jsData
            ]   
        );
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
