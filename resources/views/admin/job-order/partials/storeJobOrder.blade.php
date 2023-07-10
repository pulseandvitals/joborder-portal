<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Information for Job Order') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Put all the data for your desire Job Order.") }}
        </p>
    </header>

    <form
        method="post"
        action="{{ route('job-order.store') }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('post')

        <div class="space-y-2">
            <x-form.label
                for="Performed By"
                :value="__('Performed By')"
            />

            <x-form.input
                id="performed_by"
                name="performed_by"
                type="text"
                class="block w-full"
                :value="old('performed_by')"
                required
                autofocus
            />

            <x-form.error :messages="$errors->get('performed_by')" />
        </div>

        <div class="space-y-2">
            <x-form.label
                for="Job Order"
                :value="__('Job Order')"
            />

            <textarea
                id="work_description"
                name="work_description"
                type="text"
                class="block w-full border-gray-400 rounded"
                required
                autofocus
            >
            </textarea>

            <x-form.error :messages="$errors->get('work_description')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-button>
                {{ __('Save') }}
            </x-button>
        </div>
    </form>
</section>
