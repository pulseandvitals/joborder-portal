<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.dropdown
        title="Job Order"
        :active="Str::startsWith(request()->route()->uri(), 'job-order')"
    >
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Create"
            href="{{ route('job-order.create') }}"
            :active="request()->routeIs('job-order.create')"
        />
        <x-sidebar.sublink
            title="List"
            href="{{ route('job-order.index') }}"
            :active="request()->routeIs('job-order.index')"
        />
    </x-sidebar.dropdown>

    <x-sidebar.dropdown
    title="Invoice"
    :active="Str::startsWith(request()->route()->uri(), 'invoice')"
>
    <x-slot name="icon">
        <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
    </x-slot>

    <x-sidebar.sublink
        title="Create"
        href="{{ route('invoice.create') }}"
        :active="request()->routeIs('invoice.create')"
    />
    <x-sidebar.sublink
        title="List"
        href="{{ route('invoice.index') }}"
        :active="request()->routeIs('invoice.index')"
    />
</x-sidebar.dropdown>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Feature Coming Soon
    </div>

</x-perfect-scrollbar>
