@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Sections - {{ $produk->nama_produk }}</h1>
            <p class="mt-1 text-sm text-gray-600">Kelola section untuk produk ini</p>
        </div>
        <a href="{{ route('admin.produk.sections.create', $produk) }}" 
           class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Tambah Section
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="min-w-full" x-data="{ 
            sections: {{ $sections->toJson() }},
            reorderEnabled: false,
            async saveOrder() {
                try {
                    await axios.post('{{ route('admin.produk.sections.reorder', $produk) }}', {
                        sections: this.sections.map((section, index) => ({
                            id: section.id,
                            order: index
                        }))
                    });
                    this.reorderEnabled = false;
                    window.location.reload();
                } catch (error) {
                    alert('Terjadi kesalahan saat menyimpan urutan');
                }
            }
        }">
            <div class="p-4 bg-gray-50 border-b flex justify-between items-center">
                <button @click="reorderEnabled = !reorderEnabled" 
                        class="text-sm font-medium" 
                        :class="reorderEnabled ? 'text-red-600' : 'text-blue-600'">
                    <span x-text="reorderEnabled ? 'Batalkan Pengurutan' : 'Urutkan Section'"></span>
                </button>
                <button x-show="reorderEnabled" 
                        @click="saveOrder"
                        class="bg-blue-600 text-white px-4 py-2 rounded text-sm">
                    Simpan Urutan
                </button>
            </div>
            
            <div class="divide-y divide-gray-200">
                <template x-for="(section, index) in sections" :key="section.id">
                    <div class="p-6 flex items-start space-x-4" 
                         :class="{'cursor-move': reorderEnabled}"
                         draggable="true"
                         @dragstart="event.dataTransfer.setData('text/plain', index)"
                         @dragover.prevent
                         @drop="
                            const fromIndex = event.dataTransfer.getData('text/plain');
                            const toIndex = index;
                            const item = sections.splice(fromIndex, 1)[0];
                            sections.splice(toIndex, 0, item);
                         ">
                        <div class="flex-1">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium text-gray-900" x-text="section.title"></h3>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                                      :class="section.is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'"
                                      x-text="section.is_active ? 'Aktif' : 'Nonaktif'">
                                </span>
                            </div>
                            <div class="mt-2 text-sm text-gray-500 line-clamp-2" x-text="section.content"></div>
                            
                            <div class="mt-4 flex items-center space-x-4" x-show="!reorderEnabled">
                                <a :href="'{{ route('admin.produk.sections.edit', [$produk->id, '']) }}/' + section.id"
                                   class="text-sm text-blue-600 hover:text-blue-900">Edit</a>
                                <form :action="'{{ route('admin.produk.sections.destroy', [$produk->id, '']) }}/' + section.id"
                                      method="POST"
                                      class="inline"
                                      @submit.prevent="if (confirm('Apakah Anda yakin?')) $event.target.submit()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm text-red-600 hover:text-red-900">Hapus</button>
                                </form>
                            </div>
                        </div>
                        
                        <div x-show="section.image" class="flex-shrink-0 w-24">
                            <img :src="'/storage/produk-sections/' + section.image" 
                                 :alt="section.title"
                                 class="w-full h-24 object-cover rounded">
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endpush
@endsection
