<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\MentorController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');



Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', [BackendController::class, 'index'])->name('dashboard');
        // Display the form to edit header
        Route::get('header/edit', [BackendController::class, 'editHeader'])->name('admin.header.edit');
        Route::post('header/update', [BackendController::class, 'updateHeader'])->name('admin.header.update');

        // BANNER 1
        Route::get('/banner1/edit', [BackendController::class, 'editHeroBanner'])->name('admin.edit_banner1');
        Route::post('/banner1/update/{banner1}', [BackendController::class, 'updateHeroBanner'])->name('admin.banner1.update');

        // Bonus
        Route::get('/all/bonus', [BackendController::class, 'bonus_view'])->name('bonuses.all');
        Route::get('/create/bonus', [BackendController::class, 'createBonus'])->name('bonuses.create');
        Route::post('/store/bonus', [BackendController::class, 'storeBonus'])->name('bonuses.store');
        Route::get('/bonuses/{bonus}/edit', [BackendController::class, 'editBonus'])->name('bonuses.edit');
        Route::put('/update/bonuses/{bonus}', [BackendController::class, 'updateBonus'])->name('bonuses.update');
        Route::delete('/delete/bonuses/{bonus}', [BackendController::class, 'deleteBonus'])->name('bonuses.destroy');


        // TESTIMONIALS
        Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
        Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
        Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
        Route::get('/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
        Route::put('/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');


        // MENTOR
        Route::get('/admin/mentor/edit', [MentorController::class, 'editMentor'])->name('admin.edit.mentor');
        Route::post('/admin/mentor/update', [MentorController::class, 'updateMentor'])->name('admin.mentor.update');

        //Payment
        Route::get('/customer/payment/list', [BackendController::class, 'customerPayment'])->name('payment.list');
        Route::delete('/admin/payments/{payment}', [BackendController::class, 'destroyPayment'])->name('payments.destroy');

    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
