<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\JobOrder;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.invoice.index',[
            'invoices' => Invoice::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.invoice.create', [
            'billing_name' => JobOrder::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoiceRequest $request) : RedirectResponse
    {
        abort_if(!auth()->check(), 403, 'Unauthenticated');
        $total = $request->service_fee + $request->other_fees + $request->consulting_fee;
        Invoice::create([
            'additional_comment' => $request->additional_comment,
            'consulting_fee' => $request->consulting_fee,
            'service_fee' => $request->service_fee,
            'other_fees' => $request->other_fees,
            'billed_to' => $request->billed_to,
            'total' => $total,
            'user_id' => auth()->id(),
        ]);
        return Redirect::route('invoice.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
