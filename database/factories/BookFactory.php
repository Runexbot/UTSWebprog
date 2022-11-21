<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;
use Ramsey\Uuid\Type\Integer;

class BookFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $publisherId = DB::table('publishers')->pluck('id');
        return [
            'publisher_id' => $this->faker->randomElement($publisherId),
            'title' => $this->faker->unique()->word($nb = 3, $asText = false),
            'author' => $this->faker->name,
            'year' => $this->faker->year($max = 'now'),
            'synopsis' => $this->faker->text($maxNbChars = 100),
            'image' => "https://picsum.photos/seed/".$this->faker->unique()->word."/640/480/"
        ];
    }
}
