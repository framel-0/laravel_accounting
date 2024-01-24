<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReconciliationRequest;
use App\Http\Requests\UpdateReconciliationRequest;
use App\Models\Reconciliation;

class ReconciliationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReconciliationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reconciliation $reconciliation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReconciliationRequest $request, Reconciliation $reconciliation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reconciliation $reconciliation)
    {
        //
    }
}
