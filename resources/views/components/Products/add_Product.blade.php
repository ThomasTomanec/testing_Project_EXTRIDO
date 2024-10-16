<button id="showButton" onclick="showTable()" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
    Přidat produkt
</button>

<div id="productTable" class="hidden">
    <table class="min-w-full border border-gray-300 mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-300 px-4 py-2">Kód</th>
                <th class="border border-gray-300 px-4 py-2">Název produktu</th>
                <th class="border border-gray-300 px-8 py-2">Značka</th>
                <th class="border border-gray-300 px-8 py-2">Materiál</th>
                <th class="border border-gray-300 px-4 py-2">Cena</th>
                <th class="border border-gray-300 px-4 py-2">Popis produktu</th>
                <th class="border border-gray-300 px-4 py-2">Akce</th>
                <div>
    <button onclick="hideTable()" class=" px-2  bg-red-500 text-white rounded">x</button>
</div>
                
            </tr>
        </thead>
        <tbody>
            <form action="{{ route('produkty.create') }}" method="post" onsubmit="hideTable()">
                @csrf
                <tr>
                    <td class="border border-gray-300 px-4 py-2">
                        <input type="text" name="kod" class="w-full px-2 py-1 border border-gray-300">
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        <input type="text" name="nazev" class="w-full px-2 py-1 border border-gray-300">
                    </td>
                    <td class="border border-gray-300 py-2">
                        <select name="znacky_id" class="w-full px-8 py-1 border border-gray-300">
                            <option value="">Vyberte</option>
                            @foreach ($znacky as $znacka)
                                <option value="{{ $znacka->id }}">{{ $znacka->nazev }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="border border-gray-300 py-2">
                        <select name="materialy_id" class="w-full px-8 py-1 border border-gray-300">
                            <option value="">Vyberte</option>
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
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Přidat</button>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</div>

<script>
    function showTable() {
        document.getElementById("productTable").classList.remove("hidden");
        document.getElementById("showButton").classList.add("hidden");
    }

    function hideTable() {
        document.getElementById("productTable").classList.add("hidden");
        document.getElementById("showButton").classList.remove("hidden");
    }
</script>
