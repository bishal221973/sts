<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminEmail =  'bishalcodeslaravel@gmail.com';
        $superAdminUsername =  'ABSInfosys';

        $superAdmin = Role::firstOrCreate(['name' => 'super-admin']);
        // $superadminUser = \App\Models\User::whereEmail($superAdminEmail)->first() ?? \App\Models\User::factory()->create([

        // ]);

        DB::table('users')->insert([
            'name' => 'Bishal Chaudhary',
            // 'dob' => '2057-05-08',
            // 'gender' => 'Male',
            'email' => $superAdminEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            // 'contact_number' => '9814668499',
        ]);
        $superadminUser=User::find(1);
        $superadminUser->assignRole($superAdmin);

        // permissions to admin
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);


        // $permissions = Permission::get();

        // $superAdmin->syncPermissions($permissions);
    }
}
