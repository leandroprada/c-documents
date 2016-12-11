<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(DisciplinesTableSeeder::class);
        $this->call(DeliverablesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(DivisionsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
    }
}
