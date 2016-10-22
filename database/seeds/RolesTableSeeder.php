<?php

use App\Role;
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
        $admin = new Role();
        $admin->name= 'Admin';
        $admin->display_name = 'Administrador do sistema';
        $admin->description = 'Admin é o criado do sistema';
        $admin->save();

        $funcionario = new Role();
        $funcionario->name= 'Funcionario';
        $funcionario->display_name = 'Funcionario da Academia';
        $funcionario->description = 'Funcionario que trabalha na academia';
        $funcionario->save();

        $cliente = new Role();
        $cliente->name= 'Cliente';
        $cliente->display_name = 'Cliente da academia';
        $cliente->description = 'Cliente da academia';
        $cliente->save();
    }
}
