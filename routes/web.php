<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeHeadController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\GoogleController;

// Admin Controllers
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ExtracurricularController as AdminExtracurricularController;
use App\Http\Controllers\Admin\TeacherNewsController as AdminTeacherNewsController;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\EbookController as AdminEbookController;
use App\Http\Controllers\Admin\AlumniController as AdminAlumniController;
use App\Http\Controllers\Admin\PpdbSettingController;
use App\Http\Controllers\Admin\ContactAdminController;
use App\Http\Controllers\Admin\StatController;
use App\Http\Controllers\Admin\WelcomeHeadController as AdminWelcomeHeadController;
use App\Http\Controllers\Admin\FacilityController as AdminFacilityController;


// Forgot Password
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| FORGOT PASSWORD
|--------------------------------------------------------------------------
*/

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with('status', __($status))
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

/*
|--------------------------------------------------------------------------
| RESET PASSWORD
|--------------------------------------------------------------------------
*/

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only(
            'email',
            'password',
            'password_confirmation',
            'token'
        ),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password),
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');

// About Pages
Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
    Route::get('/history', [AboutController::class, 'history'])->name('about.history');
    Route::get('/vision-mission', [AboutController::class, 'visionMission'])->name('about.vision-mission');
    Route::get('/organization', [AboutController::class, 'organization'])->name('about.organization');
});

// Information
Route::prefix('information')->group(function () {
    Route::get('/news', [NewsController::class, 'index'])->name('information.news');
    Route::get('/news/{slug}', [NewsController::class, 'show'])->name('information.news.show');
    Route::get('/ppdb', [PpdbController::class, 'index'])->name('information.ppdb');
});

// Extracurricular (Public)
Route::get('/extracurricular', [StudentController::class, 'extracurricular'])->name('academic.extracurricular');

// Welcome
Route::get('/welcome-hero', [WelcomeHeadController::class, 'show']);

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Academic
Route::prefix('academic')->group(function () {
    Route::get('/curriculum', [StudentController::class, 'curriculum'])->name('academic.curriculum');
    Route::get('/subjects', [StudentController::class, 'subjects'])->name('academic.subjects');
    Route::get('/schedule', [StudentController::class, 'schedule'])->name('academic.schedule');
    Route::get('/extracurricular', [StudentController::class, 'extracurricular'])->name('academic.extracurricular');
});

// Teachers & Staff
Route::prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teachers');
    Route::get('/{teacher:slug}', [TeacherController::class, 'show'])->name('teachers.show');
});

// Facilities
Route::prefix('facilities')->name('facilities.')->group(function () {
    Route::get('/', [FacilityController::class, 'index'])->name('index');
    Route::get('/{slug}', [FacilityController::class, 'show'])->name('show');
});


// Student Portal
Route::prefix('student')->group(function () {
    Route::get('/portal', [StudentController::class, 'portal'])->name('student.portal');
    Route::get('/grades', [StudentController::class, 'grades'])->name('student.grades');
    Route::get('/attendance', [StudentController::class, 'attendance'])->name('student.attendance');
});

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// API Routes
Route::prefix('api')->group(function () {
    Route::get('/latest-news', [NewsController::class, 'latestNews']);
    Route::get('/upcoming-events', [HomeController::class, 'upcomingEvents']);
    Route::get('/quick-stats', [HomeController::class, 'quickStats']);
});

// Teacher News
Route::prefix('teacher-news')->group(function () {
    Route::get('/', [App\Http\Controllers\TeacherNewsController::class, 'index'])->name('teacher-news');
    Route::get('/{slug}', [App\Http\Controllers\TeacherNewsController::class, 'show'])->name('teacher-news.show');
});

// Programs
Route::prefix('programs')->group(function () {
    Route::get('/', [ProgramController::class, 'index'])->name('programs');
    Route::get('/{program}', [ProgramController::class, 'show'])->name('programs.show');
});

// Ebooks
Route::prefix('ebooks')->group(function () {
    Route::get('/', [EbookController::class, 'index'])->name('ebooks');
    Route::get('/{ebook}', [EbookController::class, 'show'])->name('ebooks.show');
    Route::get('/{ebook}/download', [EbookController::class, 'download'])->name('ebooks.download');
});

// Alumni
Route::prefix('alumni')->group(function () {
    Route::get('/', [AlumniController::class, 'index'])->name('alumni');
    Route::get('/register', [AlumniController::class, 'register'])->name('alumni.register');
    Route::post('/register', [AlumniController::class, 'store'])->name('alumni.store');
});

// PPDB
Route::prefix('ppdb')->group(function () {
    Route::get('/', [PpdbController::class, 'index'])->name('ppdb');
    Route::get('/{ppdb}', [PpdbController::class, 'show'])->name('ppdb.show');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {

    // redirect /admin
    Route::get('/', fn () => redirect()->route('admin.dashboard'));

    /*
    |=================================================
    | ADMIN & SUPERADMIN (SEMUA FITUR KONTEN)
    |=================================================
    */
    Route::middleware('is_admin')->group(function () {

        // Dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Profile
        Route::get('/profile', [AdminProfileController::class, 'edit'])
            ->name('profile.edit');
        Route::post('/profile', [AdminProfileController::class, 'update'])
            ->name('profile.update');

        // ================= KONTEN =================
        Route::get('/contacts', [ContactAdminController::class, 'index'])
            ->name('contacts.index');

        Route::prefix('ppdb')->name('ppdb.')->group(function () {
            Route::get('/settings', [PpdbSettingController::class, 'edit'])->name('settings.edit');
            Route::put('/settings', [PpdbSettingController::class, 'update'])->name('settings.update');
        });

        Route::resource('gallery', AdminGalleryController::class)->except('show');

        Route::get('/stats/edit', [StatController::class, 'edit'])->name('stats.edit');
        Route::put('/stats/update', [StatController::class, 'update'])->name('stats.update');

        Route::prefix('welcome')->name('welcome.')->group(function () {
            Route::get('/', [AdminWelcomeHeadController::class, 'index'])->name('index');
            Route::get('/create', [AdminWelcomeHeadController::class, 'create'])->name('create');
            Route::post('/store', [AdminWelcomeHeadController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [AdminWelcomeHeadController::class, 'edit'])->name('edit');
            Route::put('/{id}/update', [AdminWelcomeHeadController::class, 'update'])->name('update');
        });

        Route::resources([
            'news' => AdminNewsController::class,
            'extracurriculars' => AdminExtracurricularController::class,
            'teacher-news' => AdminTeacherNewsController::class,
            'teachers' => AdminTeacherController::class,
            'programs' => AdminProgramController::class,
            'ebooks' => AdminEbookController::class,
            'alumni' => AdminAlumniController::class,
            'facilities' => \App\Http\Controllers\Admin\FacilityController::class,
        ]);


        Route::patch('/alumni/{alumni}/approve', [AdminAlumniController::class, 'approve'])
            ->name('alumni.approve');

        Route::patch('/alumni/{alumni}/feature', [AdminAlumniController::class, 'feature'])
            ->name('alumni.feature');


        

        /*
        |=========================================
        | USER MANAGEMENT (SUPERADMIN ONLY)
        |=========================================
        */
        Route::middleware('superadmin')->group(function () {

            Route::get('/users', [UserController::class, 'index'])
                ->name('users.index');

            Route::post('/users/{id}/approve', [UserController::class, 'approve'])
                ->name('users.approve');

            Route::post('/users/{id}/make-admin', [UserController::class, 'makeAdmin'])
                ->name('users.make-admin');

            Route::delete('/users/{id}', [UserController::class, 'destroy'])
                ->name('users.destroy');
        });
    });
});
