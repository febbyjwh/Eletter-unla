<div x-data="{ notifOpen: false }" class="relative">
    {{-- Tombol Notifikasi --}}
    <button @click="notifOpen = !notifOpen" class="p-2 bg-gray-200 rounded-full relative focus:ring">
        🔔
        @if ($jumlah > 0)
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs px-1.5 py-0.5 rounded-full">
                {{ $jumlah }}
            </span>
        @endif
    </button>

    {{-- Dropdown Notifikasi --}}
    <div x-show="notifOpen" @click.outside="notifOpen = false" x-transition
        class="absolute right-0 mt-2 w-72 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden z-50">
        <div class="p-3 border-b text-sm font-semibold text-gray-700">Notifikasi Surat Masuk</div>

        @if (count($list) > 0)
            <ul class="max-h-60 overflow-y-auto text-sm">
                @foreach ($list as $surat)
                    <li class="px-4 py-2 hover:bg-gray-50 cursor-pointer">
                        📄 <span class="font-medium">{{ $surat->pengirim }}</span> - {{ $surat->perihal }}
                        <div class="text-xs text-gray-500">{{ $surat->tanggal }}</div>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="p-4 text-sm text-gray-500 text-center">Belum ada surat masuk</div>
        @endif

        <div class="p-2 text-center border-t text-xs text-blue-600 hover:bg-gray-50 cursor-pointer">
            <a href="{{ route('manajemen-suratmasuk') }}">Lihat semua</a>
        </div>
    </div>
</div>
