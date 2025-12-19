<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(30)->create(); // customer
        User::factory()->count(5)->create([
            'role_id' => Role::where('name', 'admin')->first()->id,
        ]); // admin
        User::factory()->count(5)->create([
            'role_id' => Role::where('name', 'vendor')->first()->id,
        ]); // vendor
    }
}
