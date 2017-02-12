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
                'nickname'=>$faker->unique()->word,
                'kattis'=>$faker->unique()->word,
                'country' => $faker->countryCode,
                'mc' => $this->generate_mc(),
                'tc' => $this->generate_tc(),
                'hw' => $this->generate_hw(),
                'bs' => $this->generate_bs(),
                'ks' => $this->generate_ks(),
                'ac' => $this->generate_ac(),
                'comment' => $faker->text($maxNbChars = 100),
            ]);
        }
    }

    private function generate_mc()
    {
        $min, $max, $n  = 0, 4, 9;
        $arr = [];
        for ($i=0;$i<$n;$i++){
            $arr[] = $faker->numberBetween($min*2, $max*2)/2;
        }
        return implode(",", $arr);
    }

    private function generate_tc()
    {
        $x_min, $x_max  = 0, 10.5;
        $y_min, $y_max  = 0, 13.5;
        $arr = [];
        $arr[] = $faker->numberBetween($x_min*2, $x_max*2)/2;
        $arr[] = $faker->numberBetween($y_min*2, $y_max*2)/2;
        return implode(",", $arr);
    }
    private function generate_hw()
    {
        $min, $max, $n  = 0, 1.5, 10;
        $arr = [];
        for ($i=0;$i<$n;$i++){
            $arr[] = $faker->numberBetween($min*2, $max*2)/2;
        }
        return implode(",", $arr);
    }
    private function generate_bs()
    {
        $min, $max, $n  = 0, 1, 9;
        $arr = [];
        for ($i=0;$i<$n;$i++){
            $arr[] = $faker->numberBetween($min, $max);
        }
        return implode(",", $arr);
    }
    private function generate_ks()
    {
        $min, $max, $n  = 0, 1, 12;
        $arr = [];
        for ($i=0;$i<$n;$i++){
            $arr[] = $faker->numberBetween($min, $max);
        }
        return implode(",", $arr);
    }
    private function generate_ac()
    {
        $x_min, $x_max,  = 0, 1;
        $y_min, $y_max,  = 0, 3;
        $z_min, $z_max,  = 0, 6;
        $arr = [];
        $arr[] = $faker->numberBetween($x_min, $x_max);
        $arr[] = $faker->numberBetween($x_min, $x_max);
        $arr[] = $faker->numberBetween($y_min, $y_max);
        $arr[] = $faker->numberBetween($y_min, $y_max);
        $arr[] = $faker->numberBetween($x_min, $x_max);
        $arr[] = $faker->numberBetween($x_min, $x_max);
        $arr[] = $faker->numberBetween($z_min, $z_max);
        $arr[] = $faker->numberBetween($x_min, $x_max);        
        return implode(",", $arr);
    }

}
