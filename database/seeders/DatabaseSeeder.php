<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::query()->insert([
            ['name' => 'Bangun Baru', 'slug' => 'bangun-baru', 'description' => 'Rumah tinggal dan bangunan komersial yang direncanakan dari kebutuhan, kondisi lahan, serta anggaran nyata.', 'sort_order' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Renovasi Menyeluruh', 'slug' => 'renovasi-menyeluruh', 'description' => 'Peremajaan struktur, tata ruang, dan tampilan dengan proses kerja yang tetap menjaga aktivitas di sekitar bangunan.', 'sort_order' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Interior & Fit-out', 'slug' => 'interior-fit-out', 'description' => 'Pengerjaan ruang usaha dan hunian sampai detail akhir, termasuk koordinasi utilitas, furnitur tetap, dan pencahayaan.', 'sort_order' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Project::query()->insert([
            ['title' => 'Rumah Teduh Cibubur', 'slug' => 'rumah-teduh-cibubur', 'location' => 'Cibubur', 'project_type' => 'Hunian', 'description' => 'Rumah tropis dua lantai dengan bukaan silang dan inner court.', 'year' => 2026, 'cover_image' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?auto=format&fit=crop&w=1400&q=85', 'is_featured' => true, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Kantor Studio Selatan', 'slug' => 'kantor-studio-selatan', 'location' => 'Jakarta Selatan', 'project_type' => 'Komersial', 'description' => 'Alih fungsi bangunan lama menjadi kantor kreatif.', 'year' => 2025, 'cover_image' => 'https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=1400&q=85', 'is_featured' => true, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Paviliun Sela', 'slug' => 'paviliun-sela', 'location' => 'Bogor', 'project_type' => 'Renovasi', 'description' => 'Renovasi rumah lama dengan mempertahankan struktur utama.', 'year' => 2025, 'cover_image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1400&q=85', 'is_featured' => false, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Kedai Sudut Kota', 'slug' => 'kedai-sudut-kota', 'location' => 'Depok', 'project_type' => 'Komersial', 'description' => 'Fit-out kedai dengan material jujur dan sirkulasi ringkas.', 'year' => 2024, 'cover_image' => 'https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=1400&q=85', 'is_featured' => false, 'created_at' => now(), 'updated_at' => now()],
        ]);

        SiteSetting::query()->create(['company_name' => 'Nusa Konstruksi', 'whatsapp' => '6281234567890', 'email' => 'halo@nusakonstruksi.id', 'instagram' => '@nusakonstruksi', 'address' => 'Jl. Raya Bogor KM 27, Jakarta Timur', 'working_hours' => 'Senin—Sabtu, 08.00—17.00']);
    }
}
