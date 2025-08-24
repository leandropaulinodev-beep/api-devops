<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CICDController;

Route::post('/ci-cd/deploy', [CICDController::class, 'deploy'])->name('ci-cd.deploy');
