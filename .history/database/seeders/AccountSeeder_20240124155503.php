<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([
            'name' => "Cash",
            'account_type' => 1
        ]);

        Account::create([
            'name' => "Accounts Receivable",
            'account_type' => 1
        ]);

        Account::create([
            'name' => "Accounts Payable",
            'account_type' => 2
        ]);

        Account::create([
            'name' => "Owner\'s Equity",
            'account_type' => 3
        ]);

        Account::create([
            'name' => "Accounts Payable",
            'account_type' => 4
        ]);

        Account::create([
            'name' => "Rent Expense",
            'account_type' => 5
        ]);

        Account::create([
            'name' => "Accumulated Depreciation",
            'account_type' => 6
        ]);

        Account::create([
            'name' => "Accrued Revenue",
            'account_type' => 7
        ]);

        Account::create([
            'name' => "Prepaid Rent",
            'account_type' => 8
        ]);

        Account::create([
            'name' => "Depreciation Expense",
            'account_type' => 9
        ]);

        Account::create([
            'name' => "Intercompany Receivables",
            'account_type' => 10
        ]);

        Account::create([
            'name' => "Intercompany Payables",
            'account_type' => 10
        ]);

    }
}
