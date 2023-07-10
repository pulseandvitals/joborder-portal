<?php

namespace App\Http\Controllers;

use App\Models\JobOrder;
use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Http\Requests\QuotationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(JobOrder $job_order)
    {
        return view('admin.quotation.create',[
            'job_order' => $job_order
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuotationRequest $request, JobOrder $job_order) : RedirectResponse
    {
        abort_if(!auth()->check(), 403, 'Unauthenticated');
        Quotation::create([
            'cost' => $request->cost,
            'quotation_content' => $request->quotation_content,
            'payment_terms' => $request->payment_terms,
            'scope' => $request->scope,
            'deliver_in' => $request->deliver_in,
            'user_id' => auth()->id(),
            'job_order_id' => $job_order->id
        ]);
        return Redirect::route('job-order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Quotation $quotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quotation $quotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quotation $quotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quotation $quotation)
    {
        //
    }
}
