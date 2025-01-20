<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Super Admin', 'Admin', 'Official', 'Onsite Officer'];

        foreach ($roles as $role) {
            Role::create(['role_name' => $roles]);

            }
            DB::table('roles')->delete();
            $roles = array(
                array('id'=> 1, 'name'=> "Super Admin" ),
                array('id'=> 2, 'name'=> "Admin"),
                array('id'=> 3, 'name'=> "Official"),
                array('id'=> 4, 'name'=> "Onsite Officer"),
            );
        }
        
    }

