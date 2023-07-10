<?php

namespace Database\Seeders;

use App\Models\CompanyInformation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_information')->truncate();
        $rand = random_int(10,1000);
        CompanyInformation::create([
            'name' => 'Sample Admin Company',
            'phone_no' => random_int(1000,9999),
            'address' => 'Sample Company Address',
            'email' => 'company'.$rand.'@gmail.com'
        ]);
    }
}
