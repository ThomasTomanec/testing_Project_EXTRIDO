<h3 class="text-lg font-semibold">Seznam produktů</h3>
                    <table class="min-w-full mt-4 border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2">kod</th>
                                <th class="border border-gray-300 px-4 py-2">Název produktu</th>
                                <th class="border border-gray-300 px-4 py-2">Značka</th>
                                <th class="border border-gray-300 px-4 py-2">Materiál</th>
                                <th class="border border-gray-300 px-4 py-2">Cena</th>
                                <th class="border border-gray-300 px-4 py-2">Popis produktu</th>
                                <th class="border border-gray-300 px-4 py-2">Akce</th>
                            </tr>
                        </thead>
                        <tbody>
    @if(empty($produkty) || $produkty->isEmpty())
        <tr>
            <td colspan="7" class="text-center border border-gray-300 px-4 py-2">Žádné produkty nebyly přidány.</td>
        </tr>
    @else
        @foreach($produkty as $produkt)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->kod }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->nazev }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->znacka->nazev ?? 'Neznámá značka' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->material->nazev ?? 'Neznámý materiál' }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->cena }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $produkt->description }}</td>
                <form method="POST" action="{{ route('produkty.destroy', $produkt->id) }}"> 
                    @csrf
                    @method('delete')
                <td class="border border-gray-300 px-4 py-2"><button class="bg-orange-500 p-2 text-white font-bold rounded ">Edit</button>
                <button class="bg-red-500 p-2 text-white font-bold rounded ">Delete</button></td>
                
            </form>
            </tr>
        @endforeach
    @endif
</tbody>

                    </table>