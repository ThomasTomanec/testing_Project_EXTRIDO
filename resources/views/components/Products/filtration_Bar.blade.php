@include('components.products.alert_FiltrationProduct')
<div class="flex space-x-4 py-2">
    <form method="GET" action="{{ route('dashboard') }}" class="flex space-x-4">
        
        <select name="znacky_id" class="border border-gray-300 py-2 rounded">
            <option value="">Značka</option>
            @foreach ($znacky as $znacka)
                <option value="{{ $znacka->id }}" {{ request('znacky_id') == $znacka->id ? 'selected' : '' }}>
                    {{ $znacka->nazev }}
                </option>
            @endforeach
        </select>

        
        <select name="materialy_id" class="border border-gray-300 py-2 rounded">
            <option value="">Materiál</option>
            @foreach ($materialy as $material)
                <option value="{{ $material->id }}" {{ request('materialy_id') == $material->id ? 'selected' : '' }}>
                    {{ $material->nazev }}
                </option>
            @endforeach
        </select>

        <div class="relative">
             <input type="number" name="min_price" value="{{ request('min_price') }}" placeholder="Minimální cena" class="border border-gray-300 p-2 rounded pr-8">
             <span class="absolute right-2 top-1/2 transform -translate-y-1/2">Kč</span>
        </div>  
        <div class="relative">  
             <input type="number" name="max_price" value="{{ request('max_price') }}" placeholder="Maximální cena" class="border border-gray-300 p-2 rounded pr-8">
             <span class="absolute right-2 top-1/2 transform -translate-y-1/2">Kč</span>
        </div>

        <input type="text" name="search" value="{{ request()->get('search') }}" placeholder="Vyhledat produkty" class="border border-gray-300 p-2 rounded">

  
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Hledat</button>
    </form>
</div>
