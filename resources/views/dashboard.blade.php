<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    @include('components.products.alert_TableProduct')
                    <div>
                        @include('components.products.add_Product')
                    </div>
                    <div class="pt-10">
                        @include('components.products.product_Table')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>