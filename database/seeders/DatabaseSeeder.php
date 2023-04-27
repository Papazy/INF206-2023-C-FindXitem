<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use App\Models\Barang;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // Membuat seeder barang
        Barang::create([
            'nama' => 'Realme 3 Pro',
            'kategori' => 'Handphone',
            'warna_dasar' => 'Biru',
            'warna_sekunder' => 'Hitam',
            'Brand' => 'Realme',
            'Lokasi' => 'Meulaboh',
            'Waktu' => Carbon::now()->toDateTimeString(), // untuk inisiasi waktu sekarang
        ]);
        Barang::create([
            'nama' => 'Dompet Kulit',
            'kategori' => 'Dompet',
            'warna_dasar' => 'Coklat',
            'warna_sekunder' => 'Merah',
            'Brand' => 'Unknown',
            'Lokasi' => 'Banda Aceh',
            'Waktu' => Carbon::now()->toDateTimeString(),
        ]);
        Barang::create([
            'nama' => 'Lucifer T1 TWS',
            'kategori' => 'Earphone',
            'warna_dasar' => 'Hitam',
            'warna_sekunder' => 'Hitam',
            'Brand' => 'Black Shark',
            'Lokasi' => 'Lhokseumawe',
            'Waktu' => Carbon::now()->toDateTimeString(),
        ]);
        
    }
}
