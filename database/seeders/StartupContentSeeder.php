<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Setting;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Package;
use App\Models\PackageFeature;
use App\Models\Testimonial;
use App\Models\SiteStat;
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
                'category' => 'Retail',
                'industry' => 'Retail',
                'client_name' => 'Toko Barokah',
                'image_path' => 'portfolio/toko-barokah.jpg',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1578916171728-46686eac8d58?q=80&w=800',
                'description' => 'Mendigitalisasi sistem pencatatan stok dan kasir untuk toko kelontong legendaris di Surabaya.',
                'challenge' => 'Pencatatan stok masih menggunakan buku manual yang rentan robek atau hilang. Sering terjadi selisih barang hingga Rp 1.500.000 per bulan tanpa diketahui penyebabnya.',
                'solution' => 'Pemasangan barcode scanner, setup printer thermal kasir, dan instalasi sistem POS berbasis cloud dengan akses inventory dari HP owner.',
                'result_metric' => 'Omzet naik 40% dalam 3 bulan',
                'problem_description' => 'Pencatatan stok masih manual menggunakan buku, sering terjadi selisih barang.',
                'solution_description' => 'Implementasi sistem manajemen stok berbasis web yang bisa diakses dari HP.',
                'result_description' => 'Efisiensi waktu manajemen stok naik 80% dan akurasi data 100%.',
                'images' => ['https://images.unsplash.com/photo-1578916171728-46686eac8d58?q=80&w=800'],
                'tags' => ['kasir', 'stok', 'cloud'],
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Dashboard Analitik Multi-cabang Franchise Cafe',
                'slug' => 'dashboard-analitik-coffee',
                'category' => 'Kuliner',
                'industry' => 'Kuliner',
                'client_name' => 'Kopi Senja Group',
                'image_path' => 'portfolio/kopi-senja.jpg',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?q=80&w=800',
                'description' => 'Menghubungkan data transaksi dari 10 cabang cafe ke dalam satu layar dashboard terpusat.',
                'challenge' => 'Owner harus menanyakan laporan penjualan ke tiap manajer cabang via WhatsApp setiap malam, lalu merekapnya secara manual di Excel hingga larut malam.',
                'solution' => 'Integrasi API multi-POS ke dashboard analitik kustom dengan grafik real-time penjualan, menu terlaris, dan performa kasir.',
                'result_metric' => 'Waktu rekap hemat 12 jam/minggu',
                'problem_description' => 'Owner kesulitan memantau performa 10 cabang secara real-time.',
                'solution_description' => 'Pembuatan dashboard analitik terpusat yang mengintegrasikan data dari semua POS cabang.',
                'result_description' => 'Owner bisa mengambil keputusan strategis lebih cepat berdasarkan data real-time.',
                'images' => ['https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?q=80&w=800'],
                'tags' => ['dashboard', 'analitik', 'multi-cabang'],
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Otomasi Kasir & Notifikasi WhatsApp Toko Roti',
                'slug' => 'otomasi-kasir-roti',
                'category' => 'Kuliner',
                'industry' => 'Kuliner',
                'client_name' => 'Roti Lezat Bakery',
                'image_path' => 'portfolio/roti-lezat.jpg',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800',
                'description' => 'Implementasi POS modern dengan sinkronisasi WhatsApp notifikasi otomatis untuk laporan harian.',
                'challenge' => 'Sering terjadi kebocoran kasir karena kasir lupa menginput transaksi. Laporan stok bahan baku tidak sinkron dengan sisa roti di rak toko.',
                'solution' => 'Pemasangan sistem POS pintar yang terintegrasi WhatsApp API, mengirim ringkasan omzet otomatis ke WhatsApp owner setiap toko tutup.',
                'result_metric' => 'Selisih kas berkurang hingga 99%',
                'problem_description' => 'Nota kasir sering selisih dan pelacakan omzet harian lambat.',
                'solution_description' => 'Sistem POS cloud dengan sinkronisasi WhatsApp otomatis untuk rekap instan.',
                'result_description' => 'Kasir anti-curang dan owner tenang liburan tanpa khawatir selisih.',
                'images' => ['https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=800'],
                'tags' => ['whatsapp-notif', 'stok-roti', 'pos'],
                'is_featured' => true,
                'sort_order' => 3,
            ]
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
                'category' => 'Teknologi',
                'image_path' => 'blog/umkm-ai.jpg',
                'excerpt' => 'Teknologi AI bukan lagi milik perusahaan besar saja. Simak bagaimana UMKM bisa memanfaatkannya.',
                'content' => 'Kecerdasan Buatan (AI) kini semakin terjangkau bagi para pemilik bisnis skala kecil dan menengah. Dengan mengadopsi AI, UMKM dapat bersaing di pasar global. Pertama, asisten AI WhatsApp dapat menjawab pertanyaan FAQ pelanggan selama 24 jam nonstop. Kedua, AI dapat merekomendasikan produk terlaris berdasarkan histori pembelian konsumen. Ketiga, AI dapat mengotomatiskan pembukuan sederhana secara cepat dan akurat.',
                'status' => 'published',
                'published_at' => now(),
                'tags' => ['ai', 'umkm', 'teknologi'],
                'author_name' => 'Admin INXDVI',
                'read_time_min' => 5,
            ],
            [
                'title' => 'Penyebab Utama Kebocoran Keuntungan Retail dan Solusinya',
                'slug' => 'kebocoran-retail-solusi',
                'user_id' => $admin->id,
                'category' => 'Retail',
                'image_path' => 'blog/retail.jpg',
                'excerpt' => 'Mengapa toko Anda ramai tapi kas kosong? Pelajari 3 penyebab tersembunyi kebocoran keuangan retail.',
                'content' => 'Banyak pemilik toko retail merasa lelah karena toko selalu ramai pembeli, namun uang kas di akhir bulan selalu tipis. Penyebab utama biasanya adalah selisih stok yang tidak tercatat, fraud internal dari kasir yang tidak terpantau, dan kesalahan input harga barang grosir. Solusi terbaik adalah mengimplementasikan sistem kasir cloud POS yang merekam setiap histori transaksi secara real-time dan terintegrasi dengan stock opname digital.',
                'status' => 'published',
                'published_at' => now()->subDays(2),
                'tags' => ['retail', 'stok', 'kasir'],
                'author_name' => 'Budi Santoso',
                'read_time_min' => 6,
            ],
            [
                'title' => 'Pentingnya Laporan Keuangan Real-time bagi Owner Kuliner',
                'slug' => 'laporan-realtime-kuliner',
                'user_id' => $admin->id,
                'category' => 'Kuliner',
                'image_path' => 'blog/kuliner.jpg',
                'excerpt' => 'Hindari kerugian akibat bahan baku kedaluwarsa dengan sistem pelaporan keuangan real-time.',
                'content' => 'Bisnis kuliner memiliki perputaran bahan baku yang sangat cepat. Jika laporan penjualan dan stok baru didapatkan seminggu sekali, owner akan terlambat mengambil keputusan. Akibatnya, banyak bahan baku rusak atau terbuang. Dengan laporan real-time, owner bisa langsung mengetahui menu mana yang paling laku hari ini dan segera menyesuaikan pembelian bahan baku besok pagi.',
                'status' => 'published',
                'published_at' => now()->subDays(5),
                'tags' => ['kuliner', 'laporan', 'keuangan'],
                'author_name' => 'Siti Aminah',
                'read_time_min' => 4,
            ]
        ];

        foreach ($articles as $article) {
            Article::updateOrCreate(['slug' => $article['slug']], $article);
        }

        // 5. Settings
        $settings = [
            ['key' => 'site_name', 'value' => 'INXDVI - Solusi Digital UMKM & Enterprise', 'type' => 'text'],
            ['key' => 'contact_email', 'value' => 'hello@inxdvi.com', 'type' => 'text'],
            ['key' => 'whatsapp_number', 'value' => '6281330012100', 'type' => 'text'],
            ['key' => 'company_address', 'value' => 'Malang, Jawa Timur, Indonesia', 'type' => 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }

        // 6. FAQs
        $faqs = [
            [
                'question' => 'Apakah cocok untuk bisnis kecil / UMKM?',
                'answer' => 'Sangat cocok! Sistem kami dirancang sesederhana mungkin agar mudah dipahami bahkan untuk orang yang gaptek sekalipun.',
                'is_active' => true,
                'category' => 'Umum',
                'sort_order' => 1,
            ],
            [
                'question' => 'Berapa lama waktu pembuatan sistem?',
                'answer' => 'Proses pengerjaan biasanya berkisar antara 2 hingga 4 minggu tergantung pada kompleksitas sistem yang Anda butuhkan.',
                'is_active' => true,
                'category' => 'Umum',
                'sort_order' => 2,
            ],
            [
                'question' => 'Apakah sistem kasir ini membutuhkan koneksi internet?',
                'answer' => 'Ya, sistem kami menggunakan teknologi cloud untuk sinkronisasi data real-time. Namun, fitur kasir offline tetap tersedia untuk mencatat transaksi saat internet mati, dan akan disinkronkan otomatis begitu terhubung kembali.',
                'is_active' => true,
                'category' => 'Teknis',
                'sort_order' => 3,
            ],
            [
                'question' => 'Bagaimana jika ada error atau kendala teknis setelah serah terima?',
                'answer' => 'Kami memberikan garansi perbaikan gratis serta pendampingan WhatsApp support 7 hari seminggu untuk melatih karyawan Anda.',
                'is_active' => true,
                'category' => 'Teknis',
                'sort_order' => 4,
            ],
            [
                'question' => 'Apakah ada biaya tambahan bulanan tersembunyi?',
                'answer' => 'Tidak ada. Biaya yang Anda bayar sesuai dengan paket langganan yang dipilih. Biaya sewa server cloud, backup data, dan update sistem berkala sudah termasuk di dalamnya.',
                'is_active' => true,
                'category' => 'Pembayaran',
                'sort_order' => 5,
            ]
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(['question' => $faq['question']], $faq);
        }

        // 7. Packages & Features
        $starter = Package::updateOrCreate(
            ['slug' => 'starter'],
            [
                'name' => 'Starter',
                'tagline' => 'Untuk UMKM Baru',
                'price_monthly' => 299000,
                'price_yearly' => 2870400, // diskon 20%
                'is_popular' => false,
                'is_custom' => false,
                'highlight_color' => null,
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        $bisnis = Package::updateOrCreate(
            ['slug' => 'bisnis'],
            [
                'name' => 'Bisnis',
                'tagline' => 'Paling Banyak Dipilih',
                'price_monthly' => 599000,
                'price_yearly' => 5750400, // diskon 20%
                'is_popular' => true,
                'is_custom' => false,
                'highlight_color' => '#7C3AED',
                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        $enterprise = Package::updateOrCreate(
            ['slug' => 'enterprise'],
            [
                'name' => 'Enterprise',
                'tagline' => 'Untuk Bisnis Besar/Franchise',
                'price_monthly' => null,
                'price_yearly' => null,
                'is_popular' => false,
                'is_custom' => true,
                'highlight_color' => null,
                'sort_order' => 3,
                'is_active' => true,
            ]
        );

        // Features for Starter
        $starterFeatures = [
            ['feature' => 'Kasir & POS Digital', 'is_included' => true, 'sort_order' => 1],
            ['feature' => 'Manajemen Stok (max 500 item)', 'is_included' => true, 'sort_order' => 2],
            ['feature' => 'Laporan Harian Dasar', 'is_included' => true, 'sort_order' => 3],
            ['feature' => 'Support WhatsApp (Jam Kerja)', 'is_included' => true, 'sort_order' => 4],
            ['feature' => '1 User / 1 Cabang', 'is_included' => true, 'sort_order' => 5],
            ['feature' => 'Asisten AI WhatsApp', 'is_included' => false, 'sort_order' => 6],
            ['feature' => 'Pantau HP Real-time', 'is_included' => false, 'sort_order' => 7],
        ];
        foreach ($starterFeatures as $sf) {
            PackageFeature::updateOrCreate(
                ['package_id' => $starter->id, 'feature' => $sf['feature']],
                $sf
            );
        }

        // Features for Bisnis
        $bisnisFeatures = [
            ['feature' => 'Semua Fitur Paket Starter', 'is_included' => true, 'sort_order' => 1],
            ['feature' => 'Stok Unlimited & Alert Menipis', 'is_included' => true, 'sort_order' => 2],
            ['feature' => 'Laporan Lanjutan (Export PDF/Excel)', 'is_included' => true, 'sort_order' => 3],
            ['feature' => 'Asisten AI WhatsApp (24/7)', 'is_included' => true, 'sort_order' => 4],
            ['feature' => '5 User / 3 Cabang', 'is_included' => true, 'sort_order' => 5],
            ['feature' => 'Pantau HP Real-time', 'is_included' => true, 'sort_order' => 6],
            ['feature' => 'Dedicated Account Manager', 'is_included' => false, 'sort_order' => 7],
        ];
        foreach ($bisnisFeatures as $bf) {
            PackageFeature::updateOrCreate(
                ['package_id' => $bisnis->id, 'feature' => $bf['feature']],
                $bf
            );
        }

        // Features for Enterprise
        $enterpriseFeatures = [
            ['feature' => 'Semua Fitur Paket Bisnis', 'is_included' => true, 'sort_order' => 1],
            ['feature' => 'Custom Fitur & Integrasi API', 'is_included' => true, 'sort_order' => 2],
            ['feature' => 'User & Cabang Unlimited', 'is_included' => true, 'sort_order' => 3],
            ['feature' => 'Dedicated Account Manager', 'is_included' => true, 'sort_order' => 4],
            ['feature' => 'SLA 99.9% Server Uptime', 'is_included' => true, 'sort_order' => 5],
            ['feature' => 'Setup & Onsite Training Gratis', 'is_included' => true, 'sort_order' => 6],
        ];
        foreach ($enterpriseFeatures as $ef) {
            PackageFeature::updateOrCreate(
                ['package_id' => $enterprise->id, 'feature' => $ef['feature']],
                $ef
            );
        }

        // 8. Testimonials
        $testimonials = [
            [
                'client_name' => 'Budi Santoso',
                'position' => 'CEO',
                'company' => 'PT Maju Jaya',
                'industry' => 'Retail',
                'quote' => 'Nota selisih hilang total sejak pakai sistem ini. Stok terpantau rapi dan karyawan kerja disiplin.',
                'rating' => 5,
                'photo_url' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150',
                'video_url' => 'https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761',
                'is_featured' => true,
                'is_video' => false,
                'sort_order' => 1,
            ],
            [
                'client_name' => 'Siti Aminah',
                'position' => 'Founder',
                'company' => 'Bakso Modern',
                'industry' => 'Kuliner',
                'quote' => 'Stok ribuan item kini terkontrol dari HP. Sangat membantu rekap bahan baku daging dan mie tiap malam.',
                'rating' => 5,
                'photo_url' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150',
                'video_url' => 'https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761',
                'is_featured' => true,
                'is_video' => false,
                'sort_order' => 2,
            ],
            [
                'client_name' => 'Michael Tan',
                'position' => 'IT Manager',
                'company' => 'TechCorp',
                'industry' => 'Manufaktur',
                'quote' => 'Tim INXDVI sabar banget sampai karyawan lapangan saya yang gaptek bisa mengoperasikannya.',
                'rating' => 5,
                'photo_url' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150',
                'video_url' => 'https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761',
                'is_featured' => true,
                'is_video' => false,
                'sort_order' => 3,
            ],
            [
                'client_name' => 'H. Ahmad',
                'position' => 'Owner',
                'company' => 'Toko Sembako Barokah',
                'industry' => 'Retail',
                'quote' => 'Laporan keuangan harian sekarang otomatis dikirim ke WA saya tiap jam 9 malam. Sangat praktis!',
                'rating' => 5,
                'photo_url' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150',
                'video_url' => 'https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761',
                'is_featured' => true,
                'is_video' => true,
                'sort_order' => 4,
            ],
            [
                'client_name' => 'Diana Lestari',
                'position' => 'CEO',
                'company' => 'Apotek Sehat',
                'industry' => 'Jasa / Medis',
                'quote' => 'Sistem kasir dan stok sangat user-friendly, karyawan baru langsung paham dalam satu hari training.',
                'rating' => 5,
                'photo_url' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=150',
                'video_url' => 'https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761',
                'is_featured' => true,
                'is_video' => true,
                'sort_order' => 5,
            ],
            [
                'client_name' => 'Rian Hidayat',
                'position' => 'Founder',
                'company' => 'BarberBos',
                'industry' => 'Jasa',
                'quote' => 'Gak perlu khawatir ditinggal liburan. Semua transaksi dan kinerja kasir terpantau real-time dari HP.',
                'rating' => 5,
                'photo_url' => 'https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?q=80&w=150',
                'video_url' => 'https://player.vimeo.com/external/371433846.sd.mp4?s=236da2f3c054ba207d1c3007995a2b7f7e914f6e&profile_id=165&oauth2_token_id=57447761',
                'is_featured' => true,
                'is_video' => false,
                'sort_order' => 6,
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::updateOrCreate(
                ['client_name' => $testimonial['client_name'], 'company' => $testimonial['company']],
                $testimonial
            );
        }

        // 9. Site Stats
        $stats = [
            ['key' => 'total_clients', 'value' => '120+', 'label' => 'Klien Aktif', 'sort_order' => 1],
            ['key' => 'rating', 'value' => '4.9/5', 'label' => 'Rating Kepuasan', 'sort_order' => 2],
            ['key' => 'guarantee', 'value' => '30 Hari', 'label' => 'Garansi Uang Kembali', 'sort_order' => 3],
            ['key' => 'uptime', 'value' => '100%', 'label' => 'Uptime Server', 'sort_order' => 4]
        ];

        foreach ($stats as $stat) {
            SiteStat::updateOrCreate(['key' => $stat['key']], $stat);
        }
    }
}
