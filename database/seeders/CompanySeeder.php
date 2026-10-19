<?php

namespace Database\Seeders;

use App\Models\Companies as ModelsCompanies;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companies;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Companies::Factory()->count(10)->Create();
    }
}
