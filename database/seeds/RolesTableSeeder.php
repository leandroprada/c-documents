<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('roles')->insert([
  ['code' => 'XX','name' => 'Please Select a Role',
  ],
  [
'code' => 'ADMN',
'name' => 'ADMINISTRATOR',
],
  [
'code' => 'VIWR',
'name' => 'VIEWER',
],[

'code' => 'ISSR',
'name' => 'ISSUER',
]
           ]);
    }
}
