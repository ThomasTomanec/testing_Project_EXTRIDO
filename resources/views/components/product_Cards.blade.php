<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10 px-32 pb-10">
    @foreach($produkty as $produkt)
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-3">{{ $produkt->nazev }}</h3>
        <p class="text-gray-700"><span class="text-black font-bold">Značka:</span> {{ $produkt->znacka->nazev ?? 'N/A' }}</p>
        <p class="text-gray-700"><span class="text-black font-bold">Materiál:</span> {{ $produkt->material->nazev ?? 'N/A' }}</p>
        <p class="text-gray-700"><span class="text-black font-bold">Cena:</span> {{ number_format($produkt->cena, 2) }} Kč</p>
        <p class="text-gray-700"><span class="text-black font-bold">Popis:</span> {{ $produkt->description ?? 'Není k dispozici' }}</p>
    </div>
    @endforeach
</div>
<div class="px-32 pb-10">
            {{ $produkty->links() }}
</div>