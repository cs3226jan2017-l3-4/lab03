<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 50;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('student')->insert([ //,
                'name'=>$faker->unique()->name,
                'mc' => $faker->randomDigit,
                'tc' => $faker->randomDigit,
                'hw' => $faker->randomDigit,
                'bs' => $faker->randomDigit,
                'ks' => $faker->randomDigit,
                'ac' => $faker->randomDigit,
            ]);
        }
    }
}