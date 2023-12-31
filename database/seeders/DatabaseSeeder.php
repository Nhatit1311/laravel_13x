<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        $this->call(PhimSeeder::class);
        $this->call(PhongChieuSeeder::class);
        $this->call(DanhSachTaiKhoanSeeder::class);
        $this->call(DonViSedder::class);
        $this->call(DichVuSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(LichChieuSeeder::class);
        $this->call(ChucNangSeeder::class);
        $this->call(PhanQuyenSeeder::class);
        $this->call(QuyenChucNangSeeder::class);
    }
}
