<?php

Route::get('/role-changer', [Cardumen\LaravelPermissions\Controllers\RoleChangerController::class, 'change'])->name('role-changer');
