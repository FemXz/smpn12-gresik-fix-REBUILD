<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Teacher;
use App\Models\Stat;
use App\Models\PpdbSetting;
use App\Models\WelcomeHead;
use App\Models\Facility;

class HomeController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | 1. BERITA TERBARU
        |--------------------------------------------------------------------------
        */
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

        /*
        |--------------------------------------------------------------------------
        | 2. PRESTASI TERBARU (INI YANG KEMARIN ERROR)
        |--------------------------------------------------------------------------
        */
        $achievements = News::where('category', 'Prestasi')
            ->where('published_at', '<=', now())
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        /*
        |--------------------------------------------------------------------------
        | 3. DATA GURU
        |--------------------------------------------------------------------------
        */
        $teachers = Teacher::orderBy('name')->get();

        /*
        |--------------------------------------------------------------------------
        | 4. STATISTIK SEKOLAH
        |--------------------------------------------------------------------------
        */
        $stat = Stat::first();
        if (!$stat) {
            $stat = (object) [
                'students' => 0,
                'teachers' => 0,
                'staff' => 0,
                'achievements' => 0,
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | 5. PPDB SETTING
        |--------------------------------------------------------------------------
        */
        $ppdb = PpdbSetting::first();

        /*
        |--------------------------------------------------------------------------
        | 6. SAMBUTAN KEPALA SEKOLAH
        |--------------------------------------------------------------------------
        */
        $hero = WelcomeHead::first();
        if (!$hero) {
            $hero = (object) [
                'photo' => null,
                'title' => 'SMP Negeri 12 Gresik',
                'subtitle' => 'Sambutan Kepala Sekolah',
                'description' => "Assalamu'alaikum Warahmatullahi Wabarakatuh...",
                'name' => 'Drs. Nama Kepala Sekolah',
                'position' => 'Kepala Sekolah',
            ];
        }

        /*
        |--------------------------------------------------------------------------
        | 7. FASILITAS
        |--------------------------------------------------------------------------
        */
        $facilities = Facility::where('is_active', true)
            ->orderBy('id', 'asc')
            ->get();

        /*
        |--------------------------------------------------------------------------
        | 8. DATA UTAMA UNTUK VIEW
        |--------------------------------------------------------------------------
        */
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
            'upcoming_events' => [],
            'facilities' => $facilities,
        ];

        /*
        |--------------------------------------------------------------------------
        | 9. RETURN VIEW (SEMUA VARIABLE DIKIRIM)
        |--------------------------------------------------------------------------
        */
        return view('home', compact(
            'data',
            'teachers',
            'stat',
            'ppdb',
            'hero',
            'achievements' // 🔥 INI YANG TADI KAMU LUPA
        ));
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
