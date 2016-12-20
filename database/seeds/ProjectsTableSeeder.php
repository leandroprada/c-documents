<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('projects')->insert([
        ['code' => 'XX','name' => 'Please Select a Project',
        ],
[
        'code' => 'OIG',
        'name' => 'Oil and Gas Plant',
],[
          'code' => 'CIV',
        'name' => 'Civil Infrastracture',
      ],[

        'code' => 'PWP',
        'name' => 'Power Generation Plant'
]
                   ]);
    }
}
