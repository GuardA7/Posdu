<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jadwal::create([
            'tanggal' => now()->format('Y-m-d'),
            'tempat' => 'Tempat A',
            'acara' => 'Acara A',
        ]);
    }
}
