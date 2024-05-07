<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon'=>'098675466469','pengguna_id'=> 1],
            ['nomor_telepon'=>'082135463728','pengguna_id'=> 2],
            ['nomor_telepon'=>'089746352789','pengguna_id'=> 3],
            ['nomor_telepon'=>'089143648397','pengguna_id'=> 4],
            ['nomor_telepon'=>'089656773241','pengguna_id'=> 5],
        ];

        //masukan data ke database
        DB::table('telepons')->insert($telepons);
        //
        //
    }
}
