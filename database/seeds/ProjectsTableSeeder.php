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
        ['code' => 'XXX','name' => 'Please Select a Project',
        ],
[
        'code' => '5411',
        'name' => 'Oil and Gas Plant - Letonia',
],[
          'code' => '5555',
        'name' => 'Civil Infrastracture - Tamaulipas',
      ],[

        'code' => '8459',
        'name' => 'Power Generation Plant - Zaire'
]
                   ]);
    }
}
