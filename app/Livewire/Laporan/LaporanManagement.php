<?php

namespace App\Livewire\Laporan;

use Livewire\Component;
use App\Models\Arsip;

class LaporanManagement extends Component
{
    public int $totalSuratMasuk;
    public int $totalSuratKeluar;
    public int $totalArsip;

    public function mount(): void
    {
        $this->totalSuratMasuk = Arsip::where('jenis_surat', 'masuk')->count();
        $this->totalSuratKeluar = Arsip::where('jenis_surat', 'keluar')->count();
        $this->totalArsip = Arsip::count();
    }

    public function render()
    {
        return view('livewire.laporan.laporan-management');
    }
}