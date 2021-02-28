<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
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


        $question = Question::inRandomOrder()
            ->limit(1)
            ->first();
        // echo $questions->getAnswer()->getId();
        $falseAnswer = Answer::inRandomOrder()
            ->where('id','!=',$question->getAnswer()->getId())
            ->limit(3)
            ->get();
            $falseAnswer->push($question->getAnswer());
            $falseAnswer->shuffle();

        //  dd($question ,$falseAnswer[0] );
        //  dd($question->getAnswer()->getId());

        return view("welcome", [
            "question" => $question->getQuestion(),
            "responses" =>  $falseAnswer
        ]);
    }

}
