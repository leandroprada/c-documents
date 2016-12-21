<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('documents')->insert([
[
        'title' => 'Especificación del sistema',
        'number' => '0001',
        'full_number' => '5940-ENG-C-TO-0300-0001',
        'revision' => 'A',
        'revision_date' => '2016-15-15',
        'user_id' => '1',
        'area_id' => '2',
        'discipline_id' => '3',
        'division_id' => '4',
        'project_id' => '2',
        'transmittal_id' => '1',
        'status_id' => '1'
],
[
        'title' => 'Especificación del la Arquitectura',
        'number' => '0001',
        'full_number' => '5940-ENG-S-SP-0200-0001',
        'revision' => 'A',
        'revision_date' => '2016-15-15',
        'user_id' => '1',
        'area_id' => '3',
        'discipline_id' => '5',
        'division_id' => '2',
        'project_id' => '2',
        'transmittal_id' => '1',
        'status_id' => '1'

],
[
        'title' => 'Titulo de PRueba',
        'number' => '0001',
        'full_number' => '5940-ADM-C-TO-0100-0001',
        'revision' => 'A',
        'revision_date' => '2016-15-15',
        'user_id' => '1',
        'area_id' => '2',
        'discipline_id' => '3',
        'division_id' => '3',
        'project_id' => '2',
        'transmittal_id' => '1',
        'status_id' => '1'

]



        ]);
    }
}
