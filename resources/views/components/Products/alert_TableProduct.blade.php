@if(session()->has('success'))
<div id="alert" class="bg-green-500 text-white font-bold rounded px-4 py-2 top-4 right-4">
    {{ session('success') }}
</div>
@endif

<script>
    setTimeout(() => {
        const alert = document.getElementById('alert');
        alert.classList.add('opacity-0');
    }, 3000); 
</script>