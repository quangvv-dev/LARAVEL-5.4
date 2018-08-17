<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	 DB::table('teams')->insert([
            ['name'=>'Team thuc hanh','description'=>'kiem tra phan mem','logo'=>'img.jpg','leader'=>'Mr D']
        ,
        ]
          );
    }
}
