<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('fr_FR');
        for ($i = 1; $i < 11; $i++) {
            $answer = new Answer;
            $answer->answer = $faker->Text;
            $answer->save();
        }
    }
}
