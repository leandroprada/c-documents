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
        'email' => 'leandroprada1@gmail.com',
        'password' => '$2y$10$zauLTDlwE/BFfU.uGgjw1OihDPKe4Xl3/iv1edSMwKHg/90ryC6Sa',
        'remember_token' => "",
        'project_id' => '1',
        'role_id' => '1',
        'discipline_id' => '5'
      ]
]);
    }
}
