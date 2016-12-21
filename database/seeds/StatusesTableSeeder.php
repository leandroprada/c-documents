<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('statuses')->insert([
        ['code' => 'XX','name' => 'Please Select a Status'
     ],['code' => 'WIP','name' => 'WIP - Work In Progress'
      ],['code' => 'IFA','name' => 'IFA - Issued For Approval'
      ],['code' => 'IFC','name' => 'IFC - Issued For Construction'
      ],['code' => 'IFQ','name' => 'IFQ - Issued For Quotation'
      ],['code' => 'IFP','name' => 'IFP - Issued For Purchasing'
      ],['code' => 'IFI','name' => 'IFI - Issued For Information'
      ],['code' => 'FIN','name' => 'FIN - Final Issue'
      ],['code' => 'ABD','name' => 'ABD - As-Built Document'
      ],['code' => 'DEL','name' => 'DEL - Deleted'
      ]
]);
    }
}
