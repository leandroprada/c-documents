<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('areas')->insert([
        [
         'code' => '0100',
         'name' => 'Facilities',
       ],[
       'code' => '0200',
         'name' => 'Utilities',
       ],[
          'code' => '0300',
         'name' => 'Services',
       ],[
          'code' => '0000',
         'name' => 'General',
       ]
            ]);
    }
}
