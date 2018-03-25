<?php

Route::get('/', function () {
    return view('welcome');
});

// admin + home
require __DIR__ . '/admin.php';
