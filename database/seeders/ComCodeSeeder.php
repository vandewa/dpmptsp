<?php

namespace Database\Seeders;

use App\Models\ComCode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ComCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('com_codes')->truncate();
        $data = [
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_01', 'code_nm' => 'INFORMASI WAJIB DIUMUMKAN SECARA BERKALA', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_02', 'code_nm' => 'INFORMASI WAJIB TERSEDIA SETIAP SAAT', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_03', 'code_nm' => 'INFORMASI WAJIB DIUMUMKAN SECARA SERTA MERTA', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_04', 'code_nm' => 'DAFTAR INFORMASI YANG DIKECUALIKAN', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_MENU_ST_01', 'code_nm' => 'Link Download', 'code_group' => 'JENIS_MENU_ST', 'code_value' => ''],
            ['code_cd' => 'JENIS_MENU_ST_02', 'code_nm' => 'Konten', 'code_group' => 'JENIS_MENU_ST', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_01', 'code_nm' => 'LHKASN', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_02', 'code_nm' => 'PERJANJIAN KINERJA', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_03', 'code_nm' => 'CaLK', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_04', 'code_nm' => 'LAPORAN ASET', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_05', 'code_nm' => 'RENJA', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_06', 'code_nm' => 'RENSTRA', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_07', 'code_nm' => 'POBL', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_08', 'code_nm' => 'PROGRAM KEGIATAN', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_09', 'code_nm' => 'REALISASI ANGGARAN', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_10', 'code_nm' => 'LKjIP', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_11', 'code_nm' => 'DPA', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_12', 'code_nm' => 'RKA', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
            ['code_cd' => 'TRANSPARANSI_ANGGARAN_TP_13', 'code_nm' => 'NERACA', 'code_group' => 'JENIS_TRANSPARANSI_ANGGARAN_TP', 'code_value' => ''],
        ];

        foreach ($data as $datum) {
            ComCode::create($datum);
        }
    }
}
