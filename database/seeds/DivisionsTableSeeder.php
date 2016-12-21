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
        ['code' => 'XX','name' => 'Please Select a Division','project_id'=>1
      ],
      ['code' => 'ENG','name' => 'Engineering','project_id'=>1
    ],['code' => 'ADM','name' => 'Administration','project_id'=>1
  ],['code' => 'CON','name' => 'Construction','project_id'=>1
],['code' => 'QUA','name' => 'Quality','project_id'=>1
],['code' => 'INS','name' => 'Inspection','project_id'=>1
],['code' => 'PRC','name' => 'Project Controls','project_id'=>1
],['code' => 'MAT','name' => 'Materials','project_id'=>1
]
,
['code' => 'XXX','name' => 'Please Select a Division','project_id'=>2
],
['code' => 'ENG','name' => 'Engineering','project_id'=>2
],['code' => 'ADM','name' => 'Administration','project_id'=>2
],['code' => 'CON','name' => 'Construction','project_id'=>2
],['code' => 'QUA','name' => 'Quality','project_id'=>2
],['code' => 'INS','name' => 'Inspection','project_id'=>2
],['code' => 'PRC','name' => 'Project Controls','project_id'=>2
],['code' => 'MAT','name' => 'Materials','project_id'=>2
]
,
['code' => 'XXX','name' => 'Please Select a Division','project_id'=>3
],
['code' => 'ENG','name' => 'Engineering','project_id'=>3
],['code' => 'ADM','name' => 'Administration','project_id'=>3
],['code' => 'CON','name' => 'Construction','project_id'=>3
],['code' => 'QUA','name' => 'Quality','project_id'=>3
],['code' => 'INS','name' => 'Inspection','project_id'=>3
],['code' => 'PRC','name' => 'Project Controls','project_id'=>3
],['code' => 'MAT','name' => 'Materials','project_id'=>3
]
]);
    }
}
