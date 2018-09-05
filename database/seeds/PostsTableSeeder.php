<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\factory::create();
        for($i = 0; $i<20; $i++){
        	DB::table('posts')->insert([
        		'title'=>$faker->text($maxNbChars = 100),
                'thumbnail'=>$faker->imageUrl($width = 640, $height = 480),
                'description'=>$faker->text($maxNbChars = 100),
                'content'=>$faker->text($maxNbChars = 100),
                'slug'=>$faker->slug(),
                'user_id'=>1,
                'category_id'=>random_int(1, 10),
                

            ]);
        }
    }
}
