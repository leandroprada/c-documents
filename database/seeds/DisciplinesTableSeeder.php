<?php

use Illuminate\Database\Seeder;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('disciplines')->insert([
        ['code' => 'XX','name' => 'Please Select a Discipline','division_id' => 2
        ],
['code' => 'ARC','name' => 'A: Architecture', 'division_id' => 2
],['code' => 'ARC','name' => 'C: Concrete Structures (Civil)', 'division_id' => 2
],['code' => 'ITS','name' => 'D: IT', 'division_id' => 2
],['code' => 'ELE','name' => 'E: Electricity', 'division_id' => 2
],['code' => 'GEN','name' => 'G: General – Coordination', 'division_id' => 2
],['code' => 'INS','name' => 'I: Instruments – Control Systems', 'division_id' => 2
],['code' => 'LIN','name' => 'L: Pipelines', 'division_id' => 2
],['code' => 'MEC','name' => 'M: Mechanical Equipment', 'division_id' => 2
],['code' => 'PIP','name' => 'P: Piping', 'division_id' => 2
],['code' => 'QAI','name' => 'Q: QA/QC – INSPECTION', 'division_id' => 2
],['code' => 'PRO','name' => 'R: Process', 'division_id' => 2
],['code' => 'STR','name' => 'S: Steel Structures', 'division_id' => 2
],['code' => 'VES','name' => 'V: Vessels', 'division_id' => 2
],['code' => 'WEL','name' => 'W: Welding' ,'division_id' => 2
]
   ]);
    }
}
