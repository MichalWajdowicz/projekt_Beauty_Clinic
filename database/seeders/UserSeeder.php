<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::upsert(
            [
                [
                    'name' => 'Adam',
                     'surname' => 'Palec',
                      'gender' => 'mężczyzna',
                      'number' => '123456789',
                      'email' => 'admin@admin.pl',
                      'email_verified_at' => now(),
                      'password' => Hash::make('123456'),
                      'remember_token' => Str::random(10),
                      'role_id' => '1',
                ],
                [
                    'name' => 'Karol',
                     'surname' => 'Fretka',
                      'gender' => 'mężczyzna',
                      'number' => '987654321',
                      'email' => 'test@test.pl',
                      'email_verified_at' => now(),
                      'password' => Hash::make('123456'),
                      'remember_token' => Str::random(10),
                      'role_id' => '2',
                ],
            ],
            'name'
        );
        User::factory()->count(5)->create();
    }
}
