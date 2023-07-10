<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Job Order No. ') }} {{ $job_order->job_order_no .' Performed By '. $job_order->performed_by}}
        </h2>
    </x-slot>
    <div class="space-y-6 mb-5">
        <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg dark:bg-gray-800">
            <div class="text-gray-500"> Description: {{ $job_order->work_description }}</div>
            <div class="flex justify-between">
                <div>
                    <div class="text-xs text-gray-400"> Performed By {{ $job_order->performed_by }} </div>
                    <div class="text-xs text-gray-400"> Issued By {{ $job_order->user->name }} </div>
                    <div class="text-xs text-gray-400"> Performed By {{ $job_order->user->company->name }} </div>
                    <div class="text-xs text-gray-300"> Issued at {{ \Carbon\Carbon::parse($job_order->created_at)->format('j F, Y')  }} </div>
                </div>
                <div>
                    <div class="text-xs text-gray-400"> Scope {{ $job_order->quotation->scope }} </div>
                    <div class="text-xs text-gray-400"> Cost {{ $job_order->quotation->cost }} </div>
                    <div class="text-xs text-gray-400"> Deliver In {{ $job_order->quotation->deliver_in }} </div>
                    <div class="text-xs text-gray-400"> Quotation {{ $job_order->quotation->quotation_content }} </div>
                    <div class="text-xs text-gray-400"> Payment Terms {{ $job_order->quotation->payment_terms }} </div>
                </div>
                <div class="text-gray-300"> {{ \Carbon\Carbon::parse($job_order->created_at)->diffForHumans()}}</div>
            </div>
        </div>
    </div>
</x-app-layout>
