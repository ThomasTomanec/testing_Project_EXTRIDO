<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-2">
                    @include('components.products.alert_TableProduct')
                    <div class="">
                        <h3 class="text-lg font-semibold py-3">Seznam produktů</h3>
                    </div>
                    <div class="">
                        @include('components.products.filtration_Bar')
                        @include('components.products.add_Product')
                        <div>
                            <div class="float-right text-blue-700 underline"> @include('components.products.export_Csv')</div>
                            @include('components.products.product_Table')
                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $produkty->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>