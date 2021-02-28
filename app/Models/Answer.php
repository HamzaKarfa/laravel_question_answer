<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'answer'];

    // /**
    //  * @var int
    //  */
    // protected $id;

    // /**
    //  * @var string
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


    public function getAnswer():string
    {
        return $this->answer;
    }
    public function setAnswer(string $answer):void
    {
        $this->answer = $answer;
    }



}
