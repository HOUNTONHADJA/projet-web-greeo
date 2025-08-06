<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
        //
        public function run()
    {
        // 1. Créez le rôle admin s'il n'existe pas
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // 2. Créez l'utilisateur admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'lastname' => 'admin',
                'password' => Hash::make('12345678'),
                'image' => 'about.jpg',
                'email_verified_at' => now(),
            ]
        );

        // 3. Attribuez le rôle
        $admin->assignRole($adminRole);

        // 4. Optionnel : Créez des permissions spécifiques
        $permissions = [
            'manage-users',
            'edit-content',
            // Ajoutez d'autres permissions...
        ];
         foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
            $adminRole->givePermissionTo($perm);
        }

        $this->command->info('Admin user créé avec succès !');
    }
    
}
