<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;


    protected $fillable = [ 'question', 'answer'];
    protected $hidden = ['id'];

    // /**
    //  * id question
    //  *
    //  * @var string
    //  */
    // protected $id;

    // /**
    //  * String question
    //  *
    //  * @var string
    //  */
    // protected $question;
    // /**
    //  * Model Answer : response of this question
    //  *
    //  * @var Answer
    //  */
    // protected $answer;

    public function getId():int
    {
        return $this->id;
    }
    public function setId(int $id):void
    {
        $this->id = $id;
    }

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

    public function answer()
    {
        return $this->belongsTo('App\Models\Answer', 'id');
    }

}
