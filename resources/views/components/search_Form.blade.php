<div>

</div>

<div class=" bg-white p-10 w-[600px] rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-black mb-8 text-center">Hledat produkt</h2>
    <form method="GET" action="{{ route('home') }}">
        <div class="mb-6">
            <label for="search" class="block font-semibold text-gray-700 text-left mb-2">Zadejte název nebo kód produktu</label>
            <input type="text" name="search" class="w-full p-3 border text-black border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300" placeholder="Zadejte název nebo kód produktu" value="{{ request('search') }}">
        </div>

        <div class="mb-6">
            <label for="znacky_id" class="block font-semibold text-gray-700 text-left mb-2">Značka</label>
            <select name="znacky_id" class="w-full p-3 border text-black border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300">
                <option value="">Vyberte značku</option>
                @foreach ($znacky as $znacka)
                    <option value="{{ $znacka->id }}" {{ request('znacky_id') == $znacka->id ? 'selected' : '' }}>
                        {{ $znacka->nazev }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-6">
            <label for="materialy_id" class="block font-semibold text-gray-700 text-left mb-2">Materiál</label>
            <select name="materialy_id" class="w-full p-3 border text-black border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-300">
                <option value="">Vyberte materiál</option>
                @foreach($materialy as $material)
                    <option value="{{ $material->id }}" {{ request('materialy_id') == $material->id ? 'selected' : '' }}>
                        {{ $material->nazev }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-red-500 text-white py-3 px-8 rounded-lg shadow-md hover:bg-red-600 transition">
                Filtrovat
            </button>
        </div>
    </form>
</div>
