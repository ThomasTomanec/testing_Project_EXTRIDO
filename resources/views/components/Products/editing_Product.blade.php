<tr id="edit-row-{{ $produkt->id }}" style="display: none;">

<form id="edit-form-{{ $produkt->id }}" method="POST" action="{{ route('produkty.update', $produkt->id) }}">
    @csrf
    @method('patch')
    <div class="">
        <td class="border border-gray-300 px-4 py-2">
            <input type="text" name="kod" value="{{ $produkt->kod }}" class="w-full px-2 py-1 border border-gray-300">
        </td>
        <td class="border border-gray-300 px-4 py-2">
            <input type="text" name="nazev" value="{{ $produkt->nazev }}" class="w-full px-2 py-1 border border-gray-300">
        </td>
        <td class="border border-gray-300 px-4 py-2">
            <select name="znacka_id" class="border border-gray-300 px-8 py-2">
                @foreach($znacky as $znacka)
                <option value="{{ $znacka->id }}" {{ $produkt->znacka_id == $znacka->id ? 'selected' : '' }}>{{ $znacka->nazev }}</option>
                @endforeach
            </select>
        </td>
        <td class="border border-gray-300 px-4 py-2">
            <select name="material_id" class="border border-gray-300 px-8 py-2">
                @foreach($materialy as $material)
                <option value="{{ $material->id }}" {{ $produkt->material_id == $material->id ? 'selected' : '' }}>{{ $material->nazev }}</option>
                @endforeach
            </select>
        </td>
        <td class="border border-gray-300 px-4 py-2">
            <input type="number" name="cena" value="{{ $produkt->cena }}" class="w-full px-2 py-1 border border-gray-300">
        </td>
        <td class="border border-gray-300 px-4 py-2">
            <input name="description" value="{{ $produkt->description }} " class="w-full px-2 py-1 border border-gray-300">
        </td>
        <td class="flex content-center">
            
                <button type="submit" class="bg-green-500 p-2 m-2 text-white font-bold rounded">Uložit</button>
                <button type="button" onclick="toggleEdit({{ $produkt->id }})" class="bg-gray-500 p-2 m-2 text-white font-bold rounded">Zrušit</button>
            
        </td>
    </div>
</form>

</tr>

<script>
    function toggleEdit(id) {
        var row = document.getElementById('row-' + id);
        var editRow = document.getElementById('edit-row-' + id);
        if (editRow.style.display === 'none') {
            row.style.display = 'none';
            editRow.style.display = 'table-row';
        } else {
            row.style.display = '';
            editRow.style.display = 'none';
        }
    }
</script>