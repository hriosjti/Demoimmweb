<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <form action="{{ route('film.submit') }}" method="post" enctype="multipart/form-data" autocomplete="off"> --}}
    {{-- <form action="{{ route('join.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <label>Npm</label>
        <input type="text" name="npm" class="form-control mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-2">
        <label>Fakultas</label>
        <input type="text" name="fakultas" placeholder="IlmuKomputer" class="form-control mb-2">
        <label for="prodi">Program Studi</label>
        <select name="prodi" id="prodi">
            <optgroup label="Prodi">
                <option value="D3 SISTEM INFORMASI">D3 SISTEM INFORMASI</option>
                <option value="S1 ILMU KOMPUTER">S1 ILMU KOMPUTER</option>
            </optgroup>
        </select>
        <button class="btn btn-primary">Gabung Sekarang</button>
    </form> --}}
    <form id="dataForm" action="{{ route('join.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-red-900">Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful
                    what you share.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="npm" class="block text-sm font-medium leading-6 text-gray-900 py-2">Npm</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="npm" id="npm" autocomplete="off"
                                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="2XXXXXXX">
                            </div>
                            <label for="nama"
                                class="block text-sm font-medium leading-6 text-gray-900 py-2">Nama</label>
                            <div class="mt-1">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="nama" id="nama" autocomplete="off"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="Fulan Abdullah">
                                </div>
                                <label for="fakultas"
                                    class="block text-sm font-medium leading-6 text-gray-900 py-2">Fakultas</label>
                                <div class="mt-1">
                                    <div
                                        class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input type="text" name="fakultas" id="fakultas" autocomplete="off"
                                            class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                            placeholder="Ilmu Komputer">
                                    </div>
                                    <label for="prodi"
                                        class="block text-sm font-medium leading-6 text-gray-900 py-2">Program
                                        Stuudi</label>
                                    <div class="mt-1">
                                        <div
                                            class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                            <select name="prodi" id="prodi" autocomplete="off"
                                                class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">

                                                <option value="D3 SISTEM INFORMASI">D3 SISTEM INFORMASI</option>
                                                <option value="S1 ILMU KOMPUTER">S1 ILMU KOMPUTER</option>

                                            </select>
                                        </div>

                                    </div>
                                    <div class="mt-6 flex items-center justify-end gap-x-6">
                                        <button type="button"
                                            class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                                        <button type="submit"
                                            class="rounded-md bg-merah px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Send</button>
                                    </div>
    </form>
    <script>
        // Ambil elemen form
        const form = document.getElementById('dataForm');

        form.addEventListener('submit', async function(e) {
            e.preventDefault(); // Mencegah form submit secara default

            // Ambil data dari form
            const formData = new FormData(form);

            try {
                // Kirim data ke server menggunakan AJAX
                const response = await fetch('{{ route('join.store') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                });

                const result = await response.json();

                if (response.ok) {
                    // SweetAlert untuk notifikasi sukses
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: result.success,
                        confirmButtonColor: '#B00000',
                    });
                } else {
                    // SweetAlert untuk notifikasi gagal
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: result.error,
                        confirmButtonColor: '#B00000',
                    });
                }
            } catch (error) {
                // SweetAlert jika ada error jaringan
                Swal.fire({
                    icon: 'error',
                    title: 'Terjadi Kesalahan!',
                    text: 'Tidak dapat menghubungi server.',
                    confirmButtonColor: '#B00000',
                });
            }
        });
    </script>

</x-layout>
