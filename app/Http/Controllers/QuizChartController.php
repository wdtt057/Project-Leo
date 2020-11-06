<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;


class QuizChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function GetCSSQuizScoreData()
    {
        $CSS_data = array();
        array_push(DB::select("select id,score from quiz where languague_type ='CSS'"));
        Log::info(json_encode($CSS_data));
        return $CSS_data;
    }

    public function GetHTMLQuizScoreData()
    {
        $HTML_data = array();
        array_push(DB::select("select id,score from quiz where languague_type ='HTML'"));
        Log::info(json_encode($HTML_data));
        return $HTML_data;
    }

    public function GetJSQuizScoreData()
    {
        $JS_data = array();
        array_push(DB::select("select id,score from quiz where languague_type ='JS'"));
        Log::info(json_encode($JS_data));
        return $JS_data;
    }
}
