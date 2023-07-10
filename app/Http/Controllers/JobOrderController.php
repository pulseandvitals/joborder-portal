<?php

namespace App\Http\Controllers;

use App\Models\JobOrder;
use Illuminate\Http\Request;
use App\Http\Requests\JobOrderRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class JobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.job-order.index', [
            'job_orders' => JobOrder::query()
                ->orderBy('id','desc')
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.job-order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobOrderRequest $request) : RedirectResponse
    {
        abort_if(!auth()->check(), 403, 'Unauthenticated');
        JobOrder::create([
            'work_description' => $request->work_description,
            'performed_by' => $request->performed_by,
            'user_id' => auth()->id(),
            'job_order_no' => random_int(99999,999999)
        ]);

        return Redirect::route('job-order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobOrder $job_order)
    {
        return view('admin.job-order.show', [
            'job_order' => $job_order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobOrder $jobOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobOrder $jobOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobOrder $jobOrder)
    {
        //
    }
}
