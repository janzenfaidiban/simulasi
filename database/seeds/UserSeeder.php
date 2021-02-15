<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supervisor = User::create([
            'nama_depan' => 'Moses',
            'nama_belakang' => 'Kilang',
            'username' => 'moses',
            'level' => 'supervisor',
            'email' => 'admin@moses.com',
            'password' => bcrypt('12345678'),
        ]);

        $supervisor->assignRole('supervisor');


        $cashier = User::create([
            'nama_depan' => 'Theiz',
            'nama_belakang' => 'andatu',
            'username' => 'thiz',
            'level' => 'cashier',
            'email' => 'cashier@moses.com',
            'password' => bcrypt('12345678'),
        ]);

        $cashier->assignRole('cashier');


        $acceptance = User::create([
            'nama_depan' => 'Iman',
            'nama_belakang' => 'Ilham',
            'username' => 'iman_ilham',
            'level' => 'acceptance',
            'email' => 'acceptance@moses.com',
            'password' => bcrypt('12345678'),
        ]);

        $acceptance->assignRole('acceptance');
    }
}
