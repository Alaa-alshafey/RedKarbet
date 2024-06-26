<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spalite\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
       $arrayofPermissions = [

            'users create','users update', 'users view' , 'users delete'
       ];
    }
}
