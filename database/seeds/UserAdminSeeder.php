<?php

use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'nom' => 'superAdmin',
            'prenom' => 'superAdmin',
            'email' => 'o.bezaudin@gmail.com',
            'password' => bcrypt('secret'),
            'actif' => true,
            'confirme' => true
        ]);
    }
}
