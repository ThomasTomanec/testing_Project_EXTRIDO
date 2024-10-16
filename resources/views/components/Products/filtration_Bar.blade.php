<div class="flex space-x-4">
<select name="znacky_id" class="border border-gray-300 py-2 mb-4 rounded">
        <option value="">Značka</option>
        @foreach ($znacky as $znacka)
        <option value="{{ $znacka->id }}">{{ $znacka->nazev }}</option>
        @endforeach
</select>

<select name="materialy_id" class="border border-gray-300 py-2 mb-4 rounded">
        <option value="">Material</option>
        @foreach ($materialy as $material)
        <option value="{{ $material->id }}">{{ $material->nazev }}</option>
        @endforeach
</select>

<form method="GET" action="{{ route('dashboard') }}" class="mb-4">
    <input type="text" name="search" value="{{ request()->get('search') }}" placeholder="Vyhledat produkty" class="border border-gray-300 p-2 rounded">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Hledat</button>
</form>
</div>