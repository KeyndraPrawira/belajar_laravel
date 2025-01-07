<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang' => 'Sikat Gigi', 'merk' => 'Spespodent', 'harga' => 3000],
            ['nama_barang' => 'Pasta Gigi', 'merk' => 'Coldgent', 'harga' => 5000],
            ['nama_barang' => 'Bumbu Nasi Goreng', 'merk' => 'Rack', 'harga' => 2000],
            ['nama_barang' => 'Minuman Coklat', 'merk' => 'Chocolateus', 'harga' => 3000],
            ['nama_barang' => 'Keripik', 'merk' => 'Qtolla', 'harga' => 2000]

        ];

        DB::table('barangs')->insert($barangs);

    }
}
