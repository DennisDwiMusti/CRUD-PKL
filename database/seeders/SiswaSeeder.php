<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'name' => 'Dennis Dwi Musti',
            'NIS' => 12309593,
            'rayon_id' => '1',
            'rombel' => 'PPLG XI-3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
