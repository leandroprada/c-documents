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
        ['code' => 'XX','name' => 'Please Select an Area', 'project_id' => 3
        ],[
         'code' => '0100',
         'name' => 'Facilities',
         'project_id' => 3
       ],[
       'code' => '0200',
         'name' => 'Utilities',
         'project_id' => 3
       ],[
          'code' => '0300',
         'name' => 'Services',
         'project_id' => 3
       ],[
          'code' => '0000',
         'name' => 'General',
         'project_id' => 3
       ],

       ['code' => 'XX','name' => 'Please Select an Area', 'project_id' => 2

       ],[
        'code' => '0100',
        'name' => 'Facilities',
        'project_id' => 2
      ],[
      'code' => '0200',
        'name' => 'Utilities',
        'project_id' => 2
      ],[
         'code' => '0300',
        'name' => 'Services',
        'project_id' => 2
      ],[
         'code' => '0000',
        'name' => 'General',
        'project_id' => 2
      ]
            ]);
    }
}
