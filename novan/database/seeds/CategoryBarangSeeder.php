<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('novan__master_category_barangs')->insert([
            'nama_category' => "Minuman",
        ]);
    }
}
