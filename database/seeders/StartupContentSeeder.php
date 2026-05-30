<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class StartupContentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        $admin = User::updateOrCreate(
            ['email' => 'admin@inxdvi.com'],
            [
                'name' => 'Admin INXDVI',
                'password' => Hash::make('password'),
                'is_admin' => true,
            ]
        );

        // 2. Services
        $services = [
            [
                'name' => 'AI Assistant for Business Owner',
                'slug' => 'ai-assistant-business',
                'icon' => 'cpu',
                'description' => 'Asisten AI pintar yang membantu pemilik usaha mengelola operasional, menjawab pertanyaan pelanggan, dan menganalisis data penjualan secara otomatis.',
                'base_price' => 2500000,
            ],
            [
                'name' => 'Digital Transformation for UMKM',
                'slug' => 'digital-transformation-umkm',
                'icon' => 'trending-up',
                'description' => 'Digitalisasi menyeluruh untuk UMKM, mulai dari sistem kasir cloud, manajemen stok, hingga laporan keuangan otomatis.',
                'base_price' => 1500000,
            ],
            [
                'name' => 'Enterprise Custom Software',
                'slug' => 'enterprise-custom-software',
                'icon' => 'code',
                'description' => 'Solusi perangkat lunak kustom untuk pengusaha menengah ke atas yang membutuhkan sistem spesifik untuk skala bisnis besar.',
                'base_price' => 15000000,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(['slug' => $service['slug']], $service);
        }

        // 3. Portfolios
        $portfolios = [
            [
                'title' => 'Sistem Inventaris Toko Kelontong Modern',
                'slug' => 'inventaris-toko-kelontong',
                'category' => 'UMKM',
                'client_name' => 'Toko Barokah',
                'image_path' => 'portfolio/toko-barokah.jpg',
                'problem_description' => 'Pencatatan stok masih manual menggunakan buku, sering terjadi selisih barang.',
                'solution_description' => 'Implementasi sistem manajemen stok berbasis web yang bisa diakses dari HP.',
                'result_description' => 'Efisiensi waktu manajemen stok naik 80% dan akurasi data 100%.',
            ],
            [
                'title' => 'Dashboard Analitik untuk Franchise Coffee Shop',
                'slug' => 'dashboard-analitik-coffee',
                'category' => 'MEDIUM BUSINESS',
                'client_name' => 'Kopi Senja Group',
                'image_path' => 'portfolio/kopi-senja.jpg',
                'problem_description' => 'Owner kesulitan memantau performa 10 cabang secara real-time.',
                'solution_description' => 'Pembuatan dashboard analitik terpusat yang mengintegrasikan data dari semua POS cabang.',
                'result_description' => 'Owner bisa mengambil keputusan strategis lebih cepat berdasarkan data real-time.',
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::updateOrCreate(['slug' => $portfolio['slug']], $portfolio);
        }

        // 4. Articles
        $articles = [
            [
                'title' => '5 Cara UMKM Naik Kelas dengan Teknologi AI',
                'slug' => 'umkm-naik-kelas-ai',
                'user_id' => $admin->id,
                'category' => 'TEKNOLOGI',
                'excerpt' => 'Teknologi AI bukan lagi milik perusahaan besar saja. Simak bagaimana UMKM bisa memanfaatkannya.',
                'content' => 'Isi lengkap artikel tentang implementasi AI untuk efisiensi bisnis skala kecil...',
                'status' => 'published',
                'published_at' => now(),
            ],
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(['slug' => $article['slug']], $article);
        }

        // 5. Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'INXDVI - Solusi Digital UMKM & Enterprise', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'hello@inxdvi.com', 'type' => 'text'],
            ['key' => 'whatsapp_number', 'value' => '6281234567890', 'type' => 'text'],
            ['key' => 'company_address', 'value' => 'Malang, Jawa Timur, Indonesia', 'type' => 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
