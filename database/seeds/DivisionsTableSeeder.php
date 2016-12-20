<?php

use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('divisions')->insert([
        ['code' => 'XX','name' => 'Please Select a Division',
        ],
        ['code' => 'ENG',
        'name' => 'Engineering',
      ],['code' => 'ADM',
        'name' => 'Administration',
      ],['code' => 'CON',
        'name' => 'Construction',
      ],['code' => 'QUA',
        'name' => 'Quality',
      ],['code' => 'INS',
        'name' => 'Inspection',
      ],['code' => 'PRC',
        'name' => 'Project Controls',
      ],['code' => 'MAT',
        'name' => 'Materials',
      ]
   ]);
    }
}
