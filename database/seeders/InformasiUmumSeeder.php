<?php

namespace Database\Seeders;

use App\Models\InformasiUmum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformasiUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasi_umums')->truncate();
        $data = [
            [
                'id' => '1',
                'telepon' => '(0286) 321059',
                'email' => 'dpmptsp.wsb@gmail.com',
                'alamat' => 'Jl. Kartini No. 11, Kab. Wonosobo',
                'fb' => '',
                'twitter' => '',
                'yt' => '',
                'ig' => 'https://www.instagram.com/dpmptsp_wonosobo/',
                'maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d594.4226720219427!2d109.89958210567436!3d-7.375511742391522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa1417817c51f%3A0x46ca451d31469b29!2sMPP%20Kab.%20Wonosobo!5e1!3m2!1sid!2sid!4v1701248167390!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            ],
        ];

        foreach ($data as $datum) {
            InformasiUmum::create($datum);
        }
    }
}
