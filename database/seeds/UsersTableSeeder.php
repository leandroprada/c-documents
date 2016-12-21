<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
        'name' => 'Leandro Prada',
        'email' => 'leandroprada@gmail.com',
        'password' => '$2y$10$zauLTDlwE/BFfU.uGgjw1OihDPKe4Xl3/iv1edSMwKHg/90ryC6Sa',
        'remember_token' => "",
        'project_id' => 2,
        'role_id' => 2,
        'discipline_id' => 5,
        'division_id' => 3,
      ],
        [
        'name' => 'Carlos Sandoval',
        'email' => 'carlos@gmail.com',
        'password' => '$2y$10$zauLTDlwE/BFfU.uGgjw1OihDPKe4Xl3/iv1edSMwKHg/90ryC6Sa',
        'remember_token' => "",
        'project_id' => 4,
        'role_id' => 1,
        'discipline_id' => 3,
        'division_id' => 3,
      ],
        [
        'name' => 'Arturo Mejía',
        'email' => 'arturo@gmail.com',
        'password' => '$2y$10$zauLTDlwE/BFfU.uGgjw1OihDPKe4Xl3/iv1edSMwKHg/90ryC6Sa',
        'remember_token' => "",
        'project_id' => 3,
        'role_id' => 4,
        'discipline_id' => 2,
        'division_id' => 2,
      ]
]);

    }
}
