<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Todo Creación de roles
        $role_admin = Role::create(['name' => 'Admin']);
        $role_editor = Role::create(['name' => 'Editor']);

        Permission::create(['name' => 'admin.home.index'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Contactanos
        Permission::create(['name' => 'admin.contact-us-general.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.contact-us-general.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.contact-us-general.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Categorias
        Permission::create(['name' => 'admin.categories.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Servicios
        Permission::create(['name' => 'admin.services.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.services.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.services.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Datos principales de la compañia
        Permission::create(['name' => 'admin.company_principles.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.company_principles.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.company_principles.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Certificaciones
        Permission::create(['name' => 'admin.certifications.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.certifications.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.certifications.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Banners
        Permission::create(['name' => 'admin.banner_home.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.banner_home.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.banner_home.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Highlights
        Permission::create(['name' => 'admin.highlights.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.highlights.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.highlights.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Contactanos
        Permission::create(['name' => 'admin.contacts.index'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.contacts.create'])->syncRoles([$role_admin, $role_editor]);
        Permission::create(['name' => 'admin.contacts.edit'])->syncRoles([$role_admin, $role_editor]);

        //Todo Creación de permisos - Usuarios
        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role_admin]);


    }
}
