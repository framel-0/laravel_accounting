<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AccountType::create([
            'name' => "Asset",
        ]);

        AccountType::create([
            'name' => "Liability",
        ]);

        AccountType::create([
            'name' => "Equity",
        ]);

        AccountType::create([
            'name' => "Revenue",
        ]);

        AccountType::create([
            'name' => "Expense",
        ]);

        AccountType::create([
            'name' => "Contra",
        ]);

        AccountType::create([
            'name' => "Accrual",
        ]);

        AccountType::create([
            'name' => "Prepaid Expense",
        ]);

        AccountType::create([
            'name' => "Depreciation Expense",
        ]);

        AccountType::create([
            'name' => "Intercompany",
        ]);
    }
}
