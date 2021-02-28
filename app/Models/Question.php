<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $question;
    /**
     * @var Answer
     */
    protected $answer;


    public function getQuestion():string
    {
        return $this->question;
    }
    public function setQuestion(string $question):void
    {
        $this->question = $question;
    }


    public function getAnswer():Answer
    {
        return $this->answer;
    }
    public function setAnswer(Answer $answer):void
    {
        $this->answer = $answer;
    }
    public function toto()
    {
        dd("Wesh");
    }
}
