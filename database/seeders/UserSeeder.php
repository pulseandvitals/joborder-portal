<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyInformation;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_information')->truncate();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'company_id' => 1,
        ]);
    }
}
