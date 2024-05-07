<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Produks = [
            ['nama_produk'=>'Mio','merek'=>'Yamaha','jumlah'=>'100'],
            ['nama_produk'=>'Saos','merek'=>'ABC','jumlah'=>'150'],
            ['nama_produk'=>'Shampo','merek'=>'Zink','jumlah'=>'50'],
            ['nama_produk'=>'Mobil','merek'=>'Mitsubhisi','jumlah'=>'7'],
            ['nama_produk'=>'Kecap','merek'=>'ABC','jumlah'=>'100'],
            ['nama_produk'=>'Beat','merek'=>'Honda','jumlah'=>'25'],
            ['nama_produk'=>'N MAX','merek'=>'Honda','jumlah'=>'100'],
            ['nama_produk'=>'Martabak','merek'=>'Bangka','jumlah'=>'75'],
            ['nama_produk'=>'EPEP','merek'=>'Garena','jumlah'=>'10'],
            ['nama_produk'=>'Brio','merek'=>'Mitshubhisi','jumlah'=>'100']

            
        ];

        //masukan data ke database
        DB::table('Produks')->insert($Produks);
        
    }
}
