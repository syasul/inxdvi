<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\User;

class GenerateBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-blog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically generate a high-quality blog article (with an AI image) and publish it';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $apiKey = config('services.gemini.key');
        if (!$apiKey) {
            $this->error('GEMINI_API_KEY is not configured in your .env file.');
            return 1;
        }

        $model = config('services.gemini.model', 'gemini-2.5-flash');

        $this->info('Starting automated blog generation pipeline...');

        // Fetch last 20 article titles to prevent generating duplicate topics
        $existingTitles = Article::latest()->take(20)->pluck('title')->toArray();
        $existingTitlesStr = count($existingTitles) > 0 ? implode(', ', $existingTitles) : 'None';

        // Select a random main theme/angle to keep articles diverse
        $themes = [
            'Keuntungan digitalisasi kasir (Cloud POS) dibanding pembukuan manual untuk UMKM.',
            'Tips praktis mengelola stok barang (inventory) agar tidak rugi dan selisih.',
            'Cara jitu mengendalikan cash flow dan membuat laporan keuangan bulanan UMKM secara instan.',
            'Peran asisten chatbot AI / WhatsApp Auto-Reply dalam melayani customer service 24 jam nonstop.',
            'Strategi menaikkan omset penjualan toko kelontong atau minimarket modern.',
            'Tips mengoptimalkan operasional dan manajemen bahan baku untuk bisnis Cafe, F&B, dan Kuliner.',
            'Cara owner memantau operasional bisnis dari jarak jauh (autopilot) menggunakan teknologi HP.',
            'Cara mendeteksi dan mencegah kecurangan kasir/karyawan di toko ritel lokal.'
        ];
        $selectedTheme = $themes[array_rand($themes)];

        $this->info('Chosen theme context: ' . $selectedTheme);

        // Build prompt for Gemini API
        $prompt = "Anda adalah seorang pakar bisnis digital, SEO copywriter, dan konsultan digitalisasi UMKM terkemuka.
Tugas Anda adalah menulis sebuah artikel blog yang sangat menarik, mendalam, premium, dan edukatif dalam Bahasa Indonesia.

Topik artikel harus terinspirasi dari fokus bisnis INXDVI.COM (penyedia solusi digital premium, sistem kasir Cloud POS, manajemen stok real-time, laporan keuangan instan, dan asisten chat AI/WhatsApp auto-reply).
Secara spesifik, artikel kali ini harus memfokuskan pembahasannya pada arahan tema berikut: '{$selectedTheme}'.

Berikut adalah daftar judul artikel yang sudah diterbitkan sebelumnya. Anda HARUS membuat artikel dengan judul, sudut pandang, dan topik yang BERBEDA dari judul-judul berikut agar tidak terjadi duplikasi konten:
[{$existingTitlesStr}]

Instruksi Konten:
1. Judul: Buatlah judul artikel yang click-worthy, modern, SEO-friendly, dan memikat (maksimal 100 karakter).
2. Kategori: Tentukan satu kategori yang paling tepat dari pilihan berikut: 'BISNIS', 'TEKNOLOGI', 'KEUANGAN', 'MARKETING', 'OPERASIONAL'.
3. Excerpt (Ringkasan): Tulis 1-2 kalimat ringkasan yang menarik minat pembaca di halaman awal (max 200 karakter).
4. Content (Isi):
   - Tulis artikel lengkap dalam Bahasa Indonesia dengan gaya bahasa yang profesional namun ramah, inspiratif, dan mudah dipahami oleh pemilik UMKM/pebisnis lokal.
   - Sajikan isi artikel langsung dalam format HTML. Gunakan tag heading <h2>, <h3>, paragraf <p>, daftar terstruktur <ul>/<li>, dan penekanan <strong>.
   - JANGAN sertakan tag pembungkus <html>, <head>, atau <body>. Mulailah langsung dari isi kontennya.
   - Panjang artikel antara 500 sampai 800 kata. Artikel harus memiliki pendahuluan yang relevan dengan keresahan pebisnis, sub-bab penjelasan taktis (tips/solusi), dan penutup yang memotivasi digitalisasi.
5. Tags: Berikan 3-5 tag kata kunci yang relevan (tulis dalam huruf kecil semua), misalnya: ['kasir online', 'keuangan umkm', 'digitalisasi bisnis'].
6. Read Time: Estimasi waktu baca dalam satuan menit (integer, misal: 4, 5, atau 6).
7. Image Prompt: Buatlah prompt deskripsi gambar dalam Bahasa Inggris untuk generator AI (Pollinations AI). Prompt harus menjelaskan desain visual yang elegan, bertema teknologi, modern, workspace workspace, atau digital tools dengan estetika premium, dengan warna dominan ungu dan cyan (purple & cyan), latar belakang gelap (dark background) agar senada dengan UI INXDVI.COM. Hindari teks/tulisan di dalam gambar.
Format prompt gambar: 'Isometric 3D flat vector style illustration of [deskripsi spesifik topik], dark background, premium purple and cyan neon accents, modern tech UI elements, high resolution, no text, clean composition'.";

        $this->info('Sending request to Gemini API...');

        // Send HTTP request to Gemini API
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}", [
            'contents' => [
                [
                    'parts' => [
                        ['text' => $prompt]
                    ]
                ]
            ],
            'generationConfig' => [
                'responseMimeType' => 'application/json',
                'responseSchema' => [
                    'type' => 'OBJECT',
                    'properties' => [
                        'title' => ['type' => 'STRING'],
                        'category' => ['type' => 'STRING'],
                        'excerpt' => ['type' => 'STRING'],
                        'content' => ['type' => 'STRING'],
                        'tags' => [
                            'type' => 'ARRAY',
                            'items' => ['type' => 'STRING']
                        ],
                        'read_time_min' => ['type' => 'INTEGER'],
                        'image_prompt' => ['type' => 'STRING']
                    ],
                    'required' => ['title', 'category', 'excerpt', 'content', 'tags', 'read_time_min', 'image_prompt']
                ]
            ]
        ]);

        if (!$response->successful()) {
            $this->error('Gemini API call failed: ' . $response->body());
            return 1;
        }

        $result = $response->json();
        $jsonText = $result['candidates'][0]['content']['parts'][0]['text'] ?? null;
        if (!$jsonText) {
            $this->error('Failed to parse text candidates from Gemini API response.');
            return 1;
        }

        $articleData = json_decode($jsonText, true);
        if (!$articleData) {
            $this->error('Failed to decode generated JSON: ' . $jsonText);
            return 1;
        }

        $this->info('Content successfully generated: "' . $articleData['title'] . '"');

        // Check if author exists
        $author = User::where('is_admin', true)->first() ?? User::first();
        if (!$author) {
            $this->error('No user found in the database. Please register a user or run seeders first.');
            return 1;
        }

        // Generate Image from Pollinations AI using the generated image prompt
        $imagePrompt = $articleData['image_prompt'];
        $this->info('Generating image using prompt: ' . $imagePrompt);

        $imageUrl = "https://image.pollinations.ai/prompt/" . urlencode($imagePrompt) . "?width=800&height=600&nologo=true&seed=" . rand(1, 100000);
        
        $imagePath = null;
        try {
            $this->info('Fetching image from Pollinations AI...');
            $imageResponse = Http::timeout(45)->get($imageUrl);
            
            if ($imageResponse->successful()) {
                $imageContent = $imageResponse->body();
                $slug = Str::slug($articleData['title']);
                $filename = 'articles/' . $slug . '-' . time() . '.jpg';
                
                Storage::disk('public')->put($filename, $imageContent);
                $imagePath = $filename;
                $this->info('Image downloaded and saved successfully: ' . $filename);
            } else {
                $this->warn('Failed to retrieve image from Pollinations. HTTP Code: ' . $imageResponse->status());
            }
        } catch (\Exception $e) {
            $this->warn('Image fetch encountered an exception: ' . $e->getMessage());
        }

        // Ensure unique slug
        $slug = Str::slug($articleData['title']);
        $originalSlug = $slug;
        $counter = 1;
        while (Article::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        // Save Article to database
        $article = Article::create([
            'title' => $articleData['title'],
            'slug' => $slug,
            'user_id' => $author->id,
            'author_name' => $author->name,
            'category' => strtoupper($articleData['category']),
            'image_path' => $imagePath,
            'excerpt' => $articleData['excerpt'],
            'content' => $articleData['content'],
            'status' => 'published',
            'published_at' => now(),
            'tags' => $articleData['tags'],
            'read_time_min' => $articleData['read_time_min'] ?? 5,
        ]);

        $this->info('Success! Article fully published. ID: ' . $article->id . ' | Slug: ' . $slug);
        return 0;
    }
}
