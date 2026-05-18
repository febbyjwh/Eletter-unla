<?php

namespace App\Livewire\Arsip;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Arsip;
use Illuminate\Support\Facades\Storage;

class ArsipAdmin extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $perPage = 10;

    public $isModalOpen = false;
    public $isEdit = false;

    public $arsipId;

    // form fields
    public $jenis_surat, $no_surat, $pengirim, $penerima, $perihal, $tanggal, $file_surat, $new_file;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    // OPEN CREATE
    public function openModal()
    {
        $this->resetForm();
        $this->isEdit = false;
        $this->isModalOpen = true;
    }

    // OPEN EDIT
    public function edit($id)
    {
        $arsip = Arsip::findOrFail($id);

        $this->arsipId = $arsip->id;
        $this->jenis_surat = $arsip->jenis_surat;
        $this->no_surat = $arsip->no_surat;
        $this->pengirim = $arsip->pengirim;
        $this->penerima = $arsip->penerima;
        $this->perihal = $arsip->perihal;
        $this->tanggal = $arsip->tanggal;
        $this->file_surat = $arsip->file_surat;

        $this->isEdit = true;
        $this->isModalOpen = true;
    }

    // SAVE (CREATE / UPDATE)
    public function save()
    {
        $this->validate([
            'jenis_surat' => 'required',
            'no_surat' => 'required',
            'pengirim' => 'required',
            'penerima' => 'required',
            'perihal' => 'required',
            'tanggal' => 'required',
        ]);

        $filePath = $this->file_surat;

        // upload file baru
        if ($this->new_file) {
            $filePath = $this->new_file->store('arsip', 'public');
        }

        if ($this->isEdit) {
            Arsip::find($this->arsipId)->update([
                'jenis_surat' => $this->jenis_surat,
                'no_surat' => $this->no_surat,
                'pengirim' => $this->pengirim,
                'penerima' => $this->penerima,
                'perihal' => $this->perihal,
                'tanggal' => $this->tanggal,
                'file_surat' => $filePath,
            ]);

            session()->flash('message', 'Arsip berhasil diupdate');
        } else {
            Arsip::create([
                'jenis_surat' => $this->jenis_surat,
                'no_surat' => $this->no_surat,
                'pengirim' => $this->pengirim,
                'penerima' => $this->penerima,
                'perihal' => $this->perihal,
                'tanggal' => $this->tanggal,
                'file_surat' => $filePath,
                'user_id' => auth()->id(),
                'created_by' => auth()->id(),
                'updated_by' => auth()->id(),
                'created_role_id' => auth()->user()->role_id,
                'updated_role_id' => auth()->user()->role_id,
            ]);

            session()->flash('message', 'Arsip berhasil ditambahkan');
        }

        $this->closeModal();
    }

    // DELETE
    public function delete($id)
    {
        $arsip = Arsip::findOrFail($id);

        if ($arsip->file_surat) {
            Storage::disk('public')->delete($arsip->file_surat);
        }

        $arsip->delete();

        session()->flash('message', 'Arsip berhasil dihapus');
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function resetForm()
    {
        $this->reset([
            'arsipId',
            'jenis_surat',
            'no_surat',
            'pengirim',
            'penerima',
            'perihal',
            'tanggal',
            'file_surat',
            'new_file',
        ]);
    }

    public function render()
    {
        $arsip = Arsip::query()
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('no_surat', 'like', "%{$this->search}%")
                        ->orWhere('perihal', 'like', "%{$this->search}%")
                        ->orWhere('pengirim', 'like', "%{$this->search}%")
                        ->orWhere('penerima', 'like', "%{$this->search}%");
                });
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.arsip.arsip-admin', compact('arsip'));
    }
}
