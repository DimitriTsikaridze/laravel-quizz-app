<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $quizzes = [
            ['name' => 'What is the capital of France?', 'description' => 'Paris', 'status' => 'answered'],
            ['name' => 'What is the largest planet in our solar system?', 'description' => 'Jupiter', 'status' => 'unanswered'],
            ['name' => 'What is the smallest country in the world?', 'description' => 'Vatican City', 'status' => 'answered'],
            ['name' => 'What is the highest mountain in the world?', 'description' => 'Mount Everest', 'status' => 'unanswered'],
        ];

        foreach ($quizzes as $quiz) {
            DB::table('quizzes')->insert($quiz);
        }
    }
}
