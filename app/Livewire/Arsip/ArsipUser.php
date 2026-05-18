<?php

namespace App\Livewire\Arsip;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
// use App\Models\SuratMasuk;
// use App\Models\SuratKeluar;
use App\Models\Arsip;

class ArsipUser extends Component
{
    public function render()
    {
        $userId = Auth::id();

        return view('livewire.arsip.arsip-user', [
            'suratMasuk' => Arsip::where('user_id', $userId)->where('jenis_surat', 'masuk')->latest()->get(),
            'suratKeluar' => Arsip::where('user_id', $userId)->where('jenis_surat', 'keluar')->latest()->get(),
        ]);
    }
}
