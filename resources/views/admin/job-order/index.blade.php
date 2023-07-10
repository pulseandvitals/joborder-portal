<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('List Of Job Orders') }}
        </h2>
    </x-slot>
    @forelse($job_orders as $job_order)
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
                <div class="text-gray-300"> {{ \Carbon\Carbon::parse($job_order->created_at)->diffForHumans()}}</div>
            </div>
           <div class="flex justify-end">
                <a href="{{ route('quotation.create',$job_order) }}" type="button" class="mr-2 px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:text-blue-200">
                    Add Quotation
                </a>
                <a href="{{ route('job-order.show',$job_order) }}" type="button" class="mr-2 px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:text-blue-200">
                    View
                </a>
           </div>
        </div>
    </div>
    @empty
    <div class="space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg dark:bg-gray-800">
            <div class="max-w-xl">
                <h6 class="text-gray-500"> No available job order </h6>
            </div>
        </div>
    </div>
    @endforelse
</x-app-layout>
