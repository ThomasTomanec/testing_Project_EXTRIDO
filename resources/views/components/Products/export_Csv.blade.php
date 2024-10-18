<form action="{{ route('dashboard.export') }}" method="GET" class="">
    <input type="hidden" name="search" value="{{ request('search') }}">
    <input type="hidden" name="znacky_id" value="{{ request('znacky_id') }}">
    <input type="hidden" name="materialy_id" value="{{ request('materialy_id') }}">
    <input type="hidden" name="min_price" value="{{ request('min_price') }}">
    <input type="hidden" name="max_price" value="{{ request('max_price') }}">
    <input type="hidden" name="sort" value="{{ request('sort') }}">
    <input type="hidden" name="order" value="{{ request('order') }}">
    <button type="submit" class="text-blue-500 underline">Exportovat do CSV</button>
</form>