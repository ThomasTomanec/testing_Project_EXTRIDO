<h3 class="text-lg font-semibold">Přidat produkt<h3>
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
        <form action="{{ route('produkty.create') }}" method="post">
            @csrf
            <tr>
            <td class="border border-gray-300 px-4 py-2">
                    <input type="text" name="kod" class="w-full px-2 py-1 border border-gray-300">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" name="nazev" class="w-full px-2 py-1 border border-gray-300">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select name="znacky_id" class="w-full px-2 py-1 border border-gray-300">
                        <option value="">Vyberte značku</option>

                        @foreach ($znacky as $znacka)
                            <option value="{{ $znacka->id }}">{{ $znacka->nazev }}</option>
                        @endforeach
                    </select>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <select name="materialy_id" class="w-full px-2 py-1 border border-gray-300">
                        <option value="">Vyberte material</option>

                        @foreach ($materialy as $material)
                            <option value="{{ $material->id }}">{{ $material->nazev }}</option>
                        @endforeach
                    </select>
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="number" name="cena" class="w-full px-2 py-1 border border-gray-300">
                </td>
                <td class="border border-gray-300 px-4 py-2">
                    <input type="text" name="description" class="w-full px-2 py-1 border border-gray-300">
                </td>
                <td class="border border-gray-300 px-4 py-2 text-center">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Přidat</button>
                </td>
            </tr>
        </form>
        </tbody>
</table>