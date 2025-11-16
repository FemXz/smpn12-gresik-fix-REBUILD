<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Teacher;
use App\Models\Stat;
use App\Models\PpdbSetting;
use App\Models\WelcomeHead; // tambah ini

class HomeController extends Controller
{
    public function index()
    {
        // Ambil berita terbaru (3 terakhir)
        $latestNews = News::where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        if ($latestNews->isEmpty()) {
            $latestNews = collect([
                (object) [
                    'title' => 'Belum ada berita terbaru',
                    'slug' => '#',
                    'thumbnail' => 'default-news.jpg',
                    'excerpt' => 'Berita akan segera hadir...',
                    'published_at' => now(),
                ],
            ]);
        }

        // Ambil semua guru
        $teachers = Teacher::orderBy('name')->get();

        // Ambil data statistik
        $stat = Stat::first();
        if (!$stat) {
            $stat = (object) [
                'students' => 0,
                'teachers' => 0,
                'staff' => 0,
                'achievements' => 0,
            ];
        }

        // Ambil PPDB setting
        $ppdb = PpdbSetting::first();

        // Ambil isi sambutan kepala sekolah (hanya 1 row di desain ini)
        $hero = WelcomeHead::first();

        // fallback default kalau belum ada data
        if (!$hero) {
            $hero = (object) [
                'photo' => null,
                'title' => 'SMP Negeri 12 Gresik',
                'subtitle' => 'Sambutan Kepala Sekolah',
                'description' => "Assalamu'alaikum Warahmatullahi Wabarakatuh. Dengan penuh kebanggaan, saya menyambut Anda di sekolah kami. Kami berkomitmen untuk memberikan pendidikan berkualitas yang mengembangkan akademik, karakter, dan kepribadian setiap siswa.",
                'name' => 'Drs. Nama Kepala Sekolah',
                'position' => 'Kepala Sekolah',
            ];
        }

        $data = [
            'hero' => [
                'title' => $hero->title,
                'subtitle' => $hero->subtitle,
                'description' => $hero->description,
            ],
            'stats' => [
                'students' => $stat->students,
                'teachers' => $stat->teachers,
                'staff' => $stat->staff,
                'achievements' => $stat->achievements,
            ],
            'latest_news' => $latestNews,
            'upcoming_events' => [
                // ... tetap seperti sebelumnya
            ],
            'facilities' => [
                // ... tetap seperti sebelumnya
            ],
        ];

        // Kirim hero juga sebagai variable terpisah supaya blade partial gampang akses photo/name/position
        return view('home', compact('data', 'teachers', 'stat', 'ppdb', 'hero'));
    }

    public function upcomingEvents()
    {
        return response()->json([
            [
                'title' => 'Penerimaan Siswa Baru 2025/2026',
                'date' => '2025-03-01',
                'time' => '08:00 WIB',
                'location' => 'SMPN 12 Gresik',
            ],
            [
                'title' => 'Festival Seni dan Budaya',
                'date' => '2025-02-20',
                'time' => '09:00 WIB',
                'location' => 'Aula Sekolah',
            ],
        ]);
    }
}
