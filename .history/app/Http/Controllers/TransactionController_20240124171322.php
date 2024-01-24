<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Account;
use App\Models\AuditTrail;
use App\Models\FiscalYear;
use App\Models\Transaction;
use App\Http\Resources\TransactionResource;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TransactionResource::collection(
            Transaction::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        $request->validated($request->all());

        $amount = $request->amount;
        $isDebit = $request->is_debit;

        $transaction = Transaction::create([
            'date' => $request->date,
            'description' => $request->description,
            'account_id' => $request->account_id,
            'amount' => $amount,
            'is_debit' => $isDebit,
        ]);

        $this->updateAccountBalance($transaction, $amount, $isDebit);
    }

    function getCurrentFiscalYear()
    {
        $today = Carbon::today();
        $currentYear = $today->year;
        $startMonth = 1; // Assuming the fiscal year starts in January

        if ($today->month < $startMonth) {
            $currentYear--;
        }

        return FiscalYear::where('name', '=', $currentYear . '-' . ($currentYear + 1))->first();
    }

    function updateAccountBalance($transaction, $amount, $isDebit)
    {
        // Get current balance
        $account = $transaction->account;

        $oldBalance = $account->balance;

        // Update balance based on debit/credit
        $balance = $isDebit ? $account->balance + $amount : $account->balance - $amount;

        // Update the account balance
        $account->update(['balance' => $balance]);

        // Retrieve the new balance after the transaction
        $newBalance = $account->fresh()->balance;

        // Update the audit trail record with both old and new balances
        AuditTrail::create([
            'transaction_id' => $transaction->id,
            'old_balance' => $oldBalance,
            'new_balance' => $newBalance,
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
