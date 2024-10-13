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
                    {{ __("You're logged in!") }}
                </div>

                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-semibold">Seznam produktů</h3>
                    <table class="min-w-full mt-4 border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2">ID</th>
                                <th class="border border-gray-300 px-4 py-2">Název produktu</th>
                                <th class="border border-gray-300 px-4 py-2">Značka</th>
                                <th class="border border-gray-300 px-4 py-2">Materiál</th>
                                <th class="border border-gray-300 px-4 py-2">Cena</th>
                            </tr>
                        </thead>
                        <tbody>
    @if(empty($produkty) || $produkty->isEmpty())
        <tr>
            <td colspan="5" class="text-center border border-gray-300 px-4 py-2">Žádné produkty nebyly přidány.</td>
        </tr>
    @else
        @foreach($produkty as $produkt)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->id }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->nazev }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->znacka->nazev ?? 'Neznámá značka' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->material->nazev ?? 'Neznámý materiál' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->cena }}</td>
            </tr>
        @endforeach
    @endif
</tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
