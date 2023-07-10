<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Request Invoice') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Fill up all the informations below.") }}
        </p>
    </header>

    <form
        method="post"
        action="{{ route('invoice.store') }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('post')

        <div class="space-y-2">
            <x-form.label
                for="Billed To"
                :value="__('Billed To')"
            />

            <select name="billed_to" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Select Name</option>
                @foreach($billing_name as $name)
                <option value="{{ $name->performed_by }}">{{ $name->performed_by }}</option>
                @endforeach
            </select>

            <x-form.error :messages="$errors->get('billed_to')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Service Fee"
                :value="__('Service Fee')"
            />

            <x-form.input
                id="service_fee"
                name="service_fee"
                type="number"
                class="block w-full"
                :value="old('service_fee')"
                required
                autofocus
            />

            <x-form.error :messages="$errors->get('service_fee')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Consulting Fee"
                :value="__('Consulting Fee')"
            />

            <x-form.input
                id="consulting_fee"
                name="consulting_fee"
                type="number"
                class="block w-full"
                :value="old('consulting_fee')"
                required
                autofocus
            />

            <x-form.error :messages="$errors->get('consulting_fee')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Other Fees"
                :value="__('Other Fees')"
            />

            <x-form.input
                id="other_fees"
                name="other_fees"
                type="number"
                class="block w-full"
                :value="old('other_fees')"
                required
                autofocus
            />

            <x-form.error :messages="$errors->get('other_fees')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Additional Comment"
                :value="__('Additional Comment')"
            />

            <textarea
                id="additional_comment"
                name="additional_comment"
                type="text"
                class="block w-full border-gray-400 rounded"
                required
                autofocus
            >
            </textarea>

            <x-form.error :messages="$errors->get('additional_comment')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-button>
                {{ __('Send Request') }}
            </x-button>
        </div>
    </form>
</section>
