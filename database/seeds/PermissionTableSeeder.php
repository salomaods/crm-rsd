<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permission = [
            [
                'name' => 'role-read',
                'display_name' => 'Display Role',
                'description' => 'Role Listing',
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role',            
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role',            
            ],



        ];

        foreach($permission as $key=>$value){
            Permission::create($value);

        }

    }
}
