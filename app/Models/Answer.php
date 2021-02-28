<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $answer;
    /**
     * @var Question
     */
    protected $question;




    public function getAnswer():string
    {
        return $this->answer;
    }
    public function setAnswer(string $answer):void
    {
        $this->answer = $answer;
    }


    public function getQuestion():Question
    {
        return $this->question;
    }
    public function setQuestion(Question $question):void
    {
        $this->question = $question;
    }
}
