<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArsipSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('arsip')->insert([
            // =========================
            // SURAT MASUK
            // =========================
            [
                'user_id' => 1,
                'jenis_surat' => 'masuk',
                'no_surat' => 'SM-001/2026',
                'pengirim' => 'Kementerian Pendidikan',
                'penerima' => 'Universitas ABC',
                'perihal' => 'Undangan Seminar Nasional',
                'tanggal' => Carbon::now()->subDays(10),
                'file_surat' => null,

                'created_by' => 1,
                'updated_by' => 1,
                'created_role_id' => 1,
                'updated_role_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'jenis_surat' => 'masuk',
                'no_surat' => 'SM-002/2026',
                'pengirim' => 'Dinas Pendidikan',
                'penerima' => 'Universitas ABC',
                'perihal' => 'Permintaan Data Mahasiswa',
                'tanggal' => Carbon::now()->subDays(7),
                'file_surat' => null,

                'created_by' => 2,
                'updated_by' => 2,
                'created_role_id' => 1,
                'updated_role_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],

            // =========================
            // SURAT KELUAR
            // =========================
            [
                'user_id' => 1,
                'jenis_surat' => 'keluar',
                'no_surat' => 'SK-001/2026',
                'pengirim' => 'Universitas ABC',
                'penerima' => 'Kementerian Pendidikan',
                'perihal' => 'Balasan Undangan Seminar',
                'tanggal' => Carbon::now()->subDays(5),
                'file_surat' => null,

                'created_by' => 1,
                'updated_by' => 1,
                'created_role_id' => 1,
                'updated_role_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'jenis_surat' => 'keluar',
                'no_surat' => 'SK-002/2026',
                'pengirim' => 'Universitas ABC',
                'penerima' => 'Dinas Pendidikan',
                'perihal' => 'Pengiriman Data Akademik',
                'tanggal' => Carbon::now()->subDays(2),
                'file_surat' => null,

                'created_by' => 3,
                'updated_by' => 3,
                'created_role_id' => 1,
                'updated_role_id' => 1,

                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}