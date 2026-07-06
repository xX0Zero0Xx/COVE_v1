<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    register_shutdown_function(function () {
        $error = error_get_last();
        if ($error && $error['type'] === E_ERROR) {
            // Handle fatal error
            // You can log the error or display a custom error page
            // For example, you can log the error message:
            \Log::error('Fatal error: ' . $error['message']);
        }
    });
});
