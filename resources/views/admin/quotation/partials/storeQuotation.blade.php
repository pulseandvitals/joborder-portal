<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Job Order No.') }}{{ $job_order->job_order_no }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Performed By") }} {{ $job_order->performed_by }}
        </p>
    </header>

    <form
        method="post"
        action="{{ route('quotation.store',$job_order) }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('post')

        <div class="space-y-2">
            <x-form.label
                for="Scope"
                :value="__('Scope')"
            />

            <x-form.input
                id="scope"
                name="scope"
                type="text"
                class="block w-full"
                :value="old('scope')"
                required
                autofocus
            />

            <x-form.error :messages="$errors->get('scope')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Quotation"
                :value="__('Quotation')"
            />

            <textarea
                id="quotation_content"
                name="quotation_content"
                type="text"
                class="block w-full border-gray-400 rounded"
                required
                autofocus
            >
            </textarea>

            <x-form.error :messages="$errors->get('quotation_content')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Cost"
                :value="__('Cost')"
            />

            <x-form.input
                id="cost"
                name="cost"
                type="text"
                class="block w-full"
                :value="old('cost')"
                required
                autofocus
            />

            <x-form.error :messages="$errors->get('cost')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Payment Terms"
                :value="__('Payment Terms')"
            />

            <x-form.input
                id="payment_terms"
                name="payment_terms"
                type="text"
                class="block w-full"
                :value="old('payment_terms')"
                required
                autofocus
            />

            <x-form.error :messages="$errors->get('payment_terms')" />
        </div>
            <div class="space-y-2">
                <x-form.label
                    for="Deliver In"
                    :value="__('Deliver In')"
                />

                <x-form.input
                    id="deliver_in"
                    name="deliver_in"
                    type="date"
                    class="block w-full"
                    :value="old('payment_terms')"
                    required
                    autofocus
                />

                <x-form.error :messages="$errors->get('deliver_in')" />
            </div>

            <x-form.error :messages="$errors->get('payment_terms')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-button>
                {{ __('Save') }}
            </x-button>
        </div>
    </form>
</section>
