<?php

use App\User;
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
        $usuario = new User();
        $usuario->name= 'Fellipe rocha';
        $usuario->email = 'felliperocha@academia.com';
        $usuario->password = bcrypt('123456');

        $usuario->save();
    }
}
