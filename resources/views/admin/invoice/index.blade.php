<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>
    @forelse($invoices as $invoice)
    <div class="space-y-6 mb-5">
        <div class="p-4 sm:p-8 bg-white shadow-md sm:rounded-lg dark:bg-gray-800">
            <div class="flex justify-between">
                <div>
                    <div class="text-gray-500"> Billed To: {{ $invoice->billed_to }}</div>
                    <div class="text-xs text-gray-400"> Issued By {{ $invoice->user->company->name }} </div>
                    <div class="text-xs text-gray-300"> Issued at {{ \Carbon\Carbon::parse($invoice->created_at)->format('j F, Y')  }} </div>
                </div>
                <div class="text-sm text-gray-400">Comment:{{ $invoice->additional_comment }} </div>
                <div>
                    <div class="text-md text-gray-400"> Service Fee {{ $invoice->service_fee }} </div>
                    <div class="text-md text-gray-400"> Consulting Fee {{ $invoice->consulting_fee }} </div>
                    <div class="text-md text-gray-400"> Other Fees {{ $invoice->other_fees }} </div>
                </div>
                <div>
                    <div class="text-lg text-blue-500 "> Total Fee {{ $invoice->total }} </div>
                    <div class="text-gray-300"> {{ \Carbon\Carbon::parse($invoice->created_at)->diffForHumans()}}</div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
            <div class="max-w-xl">
                <h6 class="text-gray-500"> No available Invoice </h6>
            </div>
        </div>
    </div>
    @endforelse
</x-app-layout>
