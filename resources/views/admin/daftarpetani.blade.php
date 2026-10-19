
<x-admin-layout>
    <div class="w-full px-6 py-6">
        <h1 class="text-xl text-gray-700 mb-6">
            {{ $title }}
        </h1>

        <div class="bg-white rounded shadow p-4">
            <div class="flex flex-wrap items-center justify-between gap-3 mb-5">
                <div class="flex gap-2">
                    <a href="{{ route('petani.create') }}"
                       class="px-3 py-1 text-xs text-white bg-purple-500 rounded">
                        Tambah
                    </a>

                    <button type="button"
                            class="px-3 py-1 text-xs text-white bg-green-500 rounded">
                        Publish
                    </button>

                    <button type="button"
                            class="px-3 py-1 text-xs text-white bg-red-500 rounded">
                        Delete
                    </button>
                </div>

                <form action="{{ route('petani.index') }}" method="GET"
                      class="flex">
                    <input type="text" name="search"
                           placeholder="Cari..."
                           class="border border-gray-300 px-3 py-1 text-sm rounded-l">
                    <button type="submit"
                            class="px-3 py-1 text-sm text-white bg-blue-500 rounded-r">
                        Cari
                    </button>
                </form>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs text-gray-600">
                    <thead class="bg-gray-50 uppercase text-gray-500">
                        <tr>
                            <th class="px-3 py-3">Nama</th>
                            <th class="px-3 py-3">Kontak</th>
                            <th class="px-3 py-3">Kelompok</th>
                            <th class="px-3 py-3 text-right">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($petani as $item)
                            <tr>
                                <td class="px-3 py-3 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox"
                                               name="selected[]"
                                               value="{{ $item->id_penjual }}">

                                        <img class="h-10 w-10 rounded-full object-cover"
                                             src="{{ asset($item->foto) }}"
                                             alt="Foto {{ $item->nama }}">

                                        <div>
                                            <div class="font-medium text-gray-800">
                                                {{ $item->nama }}
                                            </div>
                                            <div class="text-gray-500">
                                                {{ $item->nik }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-3 py-3">
                                    {{ $item->telp }}
                                    <div class="text-gray-400">
                                        {{ $item->alamat }}
                                    </div>
                                </td>

                                <td class="px-3 py-3">
                                    {{ $item->nama_kelompok }}
                                </td>

                                <td class="px-3 py-3 text-right whitespace-nowrap">
                                    <a href="{{ route('petani.edit', $item->id_penjual) }}"
                                       class="text-indigo-600 hover:text-indigo-900">
                                        Edit
                                    </a>

                                    <span class="text-gray-400">|</span>

                                    <form action="{{ route('petani.destroy', $item->id_penjual) }}"
                                          method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="text-red-600 hover:text-red-900"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Del
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
