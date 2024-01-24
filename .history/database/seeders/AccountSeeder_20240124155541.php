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
            'account_type_id' => 1
        ]);

        Account::create([
            'name' => "Accounts Receivable",
            'account_type_id' => 1
        ]);

        Account::create([
            'name' => "Accounts Payable",
            'account_type_id' => 2
        ]);

        Account::create([
            'name' => "Owner\'s Equity",
            'account_type_id' => 3
        ]);

        Account::create([
            'name' => "Accounts Payable",
            'account_type_id' => 4
        ]);

        Account::create([
            'name' => "Rent Expense",
            'account_type_id' => 5
        ]);

        Account::create([
            'name' => "Accumulated Depreciation",
            'account_type_id' => 6
        ]);

        Account::create([
            'name' => "Accrued Revenue",
            'account_type_id' => 7
        ]);

        Account::create([
            'name' => "Prepaid Rent",
            'account_type_id' => 8
        ]);

        Account::create([
            'name' => "Depreciation Expense",
            'account_type_id' => 9
        ]);

        Account::create([
            'name' => "Intercompany Receivables",
            'account_type_id' => 10
        ]);

        Account::create([
            'name' => "Intercompany Payables",
            'account_type_id' => 10
        ]);

    }
}
