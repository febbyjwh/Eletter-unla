<?php

namespace App\Livewire\Notifikasi;

use Livewire\Component;
use App\Models\SuratMasuk;

class NotifikasiSuratMasuk extends Component
{
    public $jumlah = 0;
    public $list = [];

    protected $listeners = ['suratMasukUpdated' => 'loadNotifikasi'];

    public function mount()
    {
        $this->loadNotifikasi();
    }

    public function loadNotifikasi()
    {
        $this->list = SuratMasuk::latest()->take(5)->get();
        $this->jumlah = SuratMasuk::count();
    }

    public function render()
    {
        return view('livewire.notifikasi.notifikasi-surat-masuk');
    }
}
