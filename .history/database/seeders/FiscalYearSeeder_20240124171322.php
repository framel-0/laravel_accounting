<?php

namespace Database\Seeders;

use App\Models\FiscalYear;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FiscalYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FiscalYear::create(['id' => 1, 'start_year' => 2022, 'end_year' => 2023, 'name' => '2022-2023']);
        FiscalYear::create(['id' => 2, 'start_year' => 2023, 'end_year' => 2024, 'name' => '2023-2024']);
    }
}
