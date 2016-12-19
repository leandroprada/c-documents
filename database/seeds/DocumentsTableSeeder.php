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

        ["title"=>"Titulo 1","number"=>"0001","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"2"  ],
  ["title"=>"Titulo 2","number"=>"0002","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"2"],
  ["title"=>"Titulo 3","number"=>"0003","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"2"],
  ["title"=>"Titulo 4","number"=>"0004","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"3"],
  ["title"=>"Titulo 1","number"=>"0005","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"1"],
  ["title"=>"Titulo 1","number"=>"0005","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"2","discipline_id"=>"2","status_id"=>"2","project_id"=>"2","division_id"=>"2"],
  ["title"=>"Titulo 1","number"=>"0007","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"3","discipline_id"=>"2","status_id"=>"3","project_id"=>"2","division_id"=>"2"],
  ["title"=>"Titulo 1","number"=>"0006","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"2"],
  ["title"=>"Titulo 1","number"=>"0007","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"1"],
  ["title"=>"Titulo 1","number"=>"0008","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"2"],
  ["title"=>"Titulo 1","number"=>"0009","revision"=>"A","revision_date"=>"2006-01-01","client_code"=>"","full_number"=>"Este es un numero de prueba","user_id"=>"1","area_id"=>"1","discipline_id"=>"2","status_id"=>"1","project_id"=>"2","division_id"=>"2"]

            ]);
    }
}
