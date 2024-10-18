<div>
    <table class="min-w-full mt-4 border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Kód</th>
                <th class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('dashboard', ['sort' => 'nazev', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">
                        Název produktu
                        <span class="ml-2">
                            @if(request('sort') == 'nazev')
                            {{ request('order') == 'asc' ? '▼' : '▲' }}
                            @else
                            –
                            @endif
                        </span>
                    </a>
                </th>
                <th class="border border-gray-300 px-4 py-2">Značka</th>
                <th class="border border-gray-300 px-4 py-2">Materiál</th>
                <th class="border border-gray-300 px-4 py-2">
                    <a href="{{ route('dashboard', ['sort' => 'cena', 'order' => request('order') == 'asc' ? 'desc' : 'asc']) }}">
                        Cena
                        <span class="ml-2">
                            @if(request('sort') == 'cena')
                            {{ request('order') == 'asc' ? '▼' : '▲' }}
                            @else
                            –
                            @endif
                        </span>
                    </a>
                </th>
                <th class="border border-gray-300 px-4 py-2">Popis produktu</th>
                <th class="border border-gray-300 px-4 py-2">Akce</th>
            </tr>
        </thead>

        <tbody>
            @if($produkty->isEmpty())
            <tr>
                <td colspan="7" class="text-center border border-gray-300 px-4 py-2">Žádné produkty nebyly nalezeny.</td>
            </tr>
            @else
            @foreach($produkty as $produkt)
            <tr id="row-{{ $produkt->id }}">
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->kod }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->nazev }}</td>
                <td class="border border-gray-300 px-8 py-2">{{ $produkt->znacka->nazev ?? 'Neznámá značka' }}</td>
                <td class="border border-gray-300 px-8 py-2">{{ $produkt->material->nazev ?? 'Neznámý materiál' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ number_format($produkt->cena, 2) }} Kč</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->description }}</td>
                <td class="border border-gray-300 px-4 py-2 ">
                    <button onclick="toggleEdit({{ $produkt->id }})" class="bg-blue-500 p-2 m-1 text-white font-bold rounded">Edit</button>
                    <form method="POST" action="{{ route('produkty.destroy', $produkt->id) }}" style="display: inline;">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 p-2 text-white font-bold rounded m-1">Delete</button>
                    </form>
                </td>
            </tr>
            @include('components.products.editing_Product')
            @endforeach
            @endif
        </tbody>
    </table>
</div>