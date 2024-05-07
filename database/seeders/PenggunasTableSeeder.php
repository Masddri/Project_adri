<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama_pengguna'=>'Udin'],
            ['nama_pengguna'=>'Alok'],
            ['nama_pengguna'=>'Ultramen'],
            ['nama_pengguna'=>'Bio'],
            ['nama_pengguna'=>'Bidot'],
        ];

        //masukan data ke database
        DB::table('penggunas')->insert($penggunas);
        //
    }
}
