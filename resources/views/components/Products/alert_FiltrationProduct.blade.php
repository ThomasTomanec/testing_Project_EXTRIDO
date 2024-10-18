@if(isset($filters) && count($filters) > 0)
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Aktivní filtry:</strong>
        <ul class="list-disc pl-6">
            @if(isset($filters['search']))
                <li>
                    Hledání: <strong>{{ $filters['search'] }}</strong>
                    <form method="GET" action="{{ route('dashboard') }}" class="inline">
                        <input type="hidden" name="znacky_id" value="{{ request('znacky_id') }}">
                        <input type="hidden" name="materialy_id" value="{{ request('materialy_id') }}">
                        <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                        <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                        <button type="submit" name="clear_search" value="1" class="text-red-600 underline">X</button>
                    </form>
                </li>
            @endif

            @if(isset($filters['znacky_id']))
                <li>
                    Značka: <strong>{{ $znacky->find($filters['znacky_id'])->nazev }}</strong>
                    <form method="GET" action="{{ route('dashboard') }}" class="inline">
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <input type="hidden" name="materialy_id" value="{{ request('materialy_id') }}">
                        <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                        <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                        <button type="submit" name="clear_znacky" value="1" class="text-red-600 underline">X</button>
                    </form>
                </li>
            @endif

            @if(isset($filters['materialy_id']))
                <li>
                    Materiál: <strong>{{ $materialy->find($filters['materialy_id'])->nazev }}</strong>
                    <form method="GET" action="{{ route('dashboard') }}" class="inline">
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <input type="hidden" name="znacky_id" value="{{ request('znacky_id') }}">
                        <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                        <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                        <button type="submit" name="clear_materialy" value="1" class="text-red-600 underline">X</button>
                    </form>
                </li>
            @endif

            @if(isset($filters['min_price']))
                <li>
                    Minimální cena: <strong>{{ $filters['min_price'] }} Kč</strong>
                    <form method="GET" action="{{ route('dashboard') }}" class="inline">
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <input type="hidden" name="znacky_id" value="{{ request('znacky_id') }}">
                        <input type="hidden" name="materialy_id" value="{{ request('materialy_id') }}">
                        <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                        <button type="submit" name="clear_min_price" value="1" class="text-red-600 underline">X</button>
                    </form>
                </li>
            @endif

            @if(isset($filters['max_price']))
                <li>
                    Maximální cena: <strong>{{ $filters['max_price'] }} Kč</strong>
                    <form method="GET" action="{{ route('dashboard') }}" class="inline">
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <input type="hidden" name="znacky_id" value="{{ request('znacky_id') }}">
                        <input type="hidden" name="materialy_id" value="{{ request('materialy_id') }}">
                        <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                        <button type="submit" name="clear_max_price" value="1" class="text-red-600 underline">X</button>
                    </form>
                </li>
            @endif
        </ul>
    </div>
@endif
