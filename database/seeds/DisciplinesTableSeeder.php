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
['code' => 'ARC','name' => 'A: Architecture',
],['code' => 'ARC','name' => 'C: Concrete Structures (Civil)',
],['code' => 'ITS','name' => 'D: IT',
],['code' => 'ELE','name' => 'E: Electricity',
],['code' => 'GEN','name' => 'G: General – Coordination',
],['code' => 'INS','name' => 'I: Instruments – Control Systems',
],['code' => 'LIN','name' => 'L: Pipelines',
],['code' => 'MEC','name' => 'M: Mechanical Equipment',
],['code' => 'PIP','name' => 'P: Piping',
],['code' => 'QAI','name' => 'Q: QA/QC – INSPECTION',
],['code' => 'PRO','name' => 'R: Process',
],['code' => 'STR','name' => 'S: Steel Structures',
],['code' => 'VES','name' => 'V: Vessels',
],['code' => 'WEL','name' => 'W: Welding'
]
   ]);
    }
}
