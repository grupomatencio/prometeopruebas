<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roles_PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate([
            'name' => 'admin',
        ]);

        Role::firstOrCreate([
            'name' => 'adminDelegacion',
        ]);

        Role::firstOrCreate([
            'name' => 'tecnico',
        ]);

        Permission::firstOrCreate([
            'name' => 'Crear Delegaciones'
        ]);
        Permission::firstOrCreate([
            'name' => 'Editar Delegaciones'
        ]);
        Permission::firstOrCreate([
            'name' => 'Ver Delegaciones'
        ]);
        Permission::firstOrCreate([
            'name' => 'Borrar Delegaciones'
        ]);

        Permission::firstOrCreate([
            'name' => 'Crear Zonas'
        ]);
        Permission::firstOrCreate([
            'name' => 'Editar Zonas'
        ]);
        Permission::firstOrCreate([
            'name' => 'Ver Zonas'
        ]);
        Permission::firstOrCreate([
            'name' => 'Borrar Zonas'
        ]);

        Permission::firstOrCreate([
            'name' => 'Crear Locales'
        ]);
        Permission::firstOrCreate([
            'name' => 'Editar Locales'
        ]);
        Permission::firstOrCreate([
            'name' => 'Ver Locales'
        ]);
        Permission::firstOrCreate([
            'name' => 'Borrar Locales'
        ]);

        Permission::firstOrCreate([
            'name' => 'Crear AdminDelegacion'
        ]);
        Permission::firstOrCreate([
            'name' => 'Editar AdminDelegacion'
        ]);
        Permission::firstOrCreate([
            'name' => 'Ver AdminDelegacion'
        ]);
        Permission::firstOrCreate([
            'name' => 'Borrar AdminDelegacion'
        ]);

        Permission::firstOrCreate([
            'name' => 'Crear Tecnicos'
        ]);
        Permission::firstOrCreate([
            'name' => 'Editar Tecnicos'
        ]);
        Permission::firstOrCreate([
            'name' => 'Ver Tecnicos'
        ]);
        Permission::firstOrCreate([
            'name' => 'Borrar Tecnicos'
        ]);
    }
}
