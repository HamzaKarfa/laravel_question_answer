<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    *
    *
    */
    public function index (){   

        $countQuestion = DB::table('questions')->count();

        $searchId = rand (1, $countQuestion);
        $questions = DB::table('questions')
                    ->where('questions.id','=', $searchId)
                    ->join('answers', 'questions.answer_id', '=', 'answers.id')
                    ->select('questions.*', 'answers.*')
                    ->first();

       

        return view("welcome", [
            "question" => $questions->question,
            "response" => $questions->answer
        ]);
    }

}
