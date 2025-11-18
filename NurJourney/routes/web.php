<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\StaffController;

// ==========================
// STAFF CONTROLLERS
// ==========================
use App\Http\Controllers\Staff\KonsultasiController;
use App\Http\Controllers\Staff\PendaftaranController;
use App\Http\Controllers\Staff\DataJamaahController;
use App\Http\Controllers\Staff\BuktiPembayaranController;

// ==========================
// 🏠 Halaman Umum (tanpa login)
// ==========================
Route::get('/', fn() => view('welcome'));
Route::get('/haji', fn() => view('haji.index'));
Route::get('/haji/detail', fn() => view('haji.detail.index'));
Route::get('/umroh', fn() => view('umroh.index'));
Route::get('/wisataHalal', fn() => view('wisataHalal.index'));
Route::get('/konsultasi', fn() => view('konsultasi.index'));

// ==========================
// 🔐 Auth + Protected Routes
// ==========================
Route::middleware(['auth', 'verified'])->group(function () {

    // ==========================
    // ADMIN ROUTES
    // ==========================
    Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('staff', AdminStaffController::class);
        // Tambah resource admin lain di sini jika ada (paket, detail-paket, dll)
    });

    // ==========================
    // STAFF ROUTES
    // ==========================
    Route::middleware('role:staff')->prefix('staff')->name('staff.')->group(function () {
        Route::get('/dashboard', [StaffController::class, 'index'])->name('dashboard');
        Route::resource('konsultasi', KonsultasiController::class);
        Route::resource('pendaftaran', PendaftaranController::class);
        Route::resource('data-jamaah', DataJamaahController::class);
        Route::resource('bukti-pembayaran', BuktiPembayaranController::class);
    });

    // ==========================
    // PROFILE (semua role)
    // ==========================
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Fallback dashboard route untuk semua role
Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return redirect()->route('staff.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('staff.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\Admin\PaketController;

Route::middleware(['auth', 'verified', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
        Route::resource('paket', PaketController::class);
    });

    Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/detail', [AdminController::class, 'detail'])->name('admin.detail.index');
});


require __DIR__.'/auth.php';
