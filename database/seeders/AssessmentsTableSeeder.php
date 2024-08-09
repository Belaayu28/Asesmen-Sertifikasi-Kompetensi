<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssessmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assessments')->insert([
            ['nim' => '12220101', 'nama' => 'Husni Faqih', 'skema' => 'Web Development', 'TUK' => 'Universitas Bsi Kota Tegal', 'hasil' => 'Kompeten'],
            ['nim' => '12220102', 'nama' => 'Ika Estri Widiana', 'skema' => 'Programmer', 'TUK' => 'Universitas Bsi Kota Tegal', 'hasil' => 'Belum Kompeten'],
            ['nim' => '12220103', 'nama' => 'Amira Afifa Nahda', 'skema' => 'Programmer', 'TUK' => 'Universitas Bsi Kota Tegal', 'hasil' => 'Kompeten'],
        ]);
    }
}
