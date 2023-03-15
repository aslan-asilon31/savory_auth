<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'aslan admin', 
            'email' => 'aslanadmin@gmail.com',
            'password' => bcrypt('aslanadmin'),
            'role' => 'admin',
            'image' => 'user.png',
        ]);
    
        $role = Role::create(['name' => 'admin']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);

        // ================================= User
        $user = User::create([
            'name' => 'aslan user', 
            'email' => 'aslanuser@gmail.com',
            'password' => bcrypt('aslanuser'),
            'role' => 'user',
            'image' => 'user.png',
        ]);
    
        $role = Role::create(['name' => 'user']);
     
        $permissions = Permission::pluck('id','id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}
