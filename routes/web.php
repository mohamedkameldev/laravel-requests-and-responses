<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\RequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('web-request', [RequestController::class, 'firstMethod']);
Route::get('web-request-2', [RequestController::class, 'secondMethod']);

Route::get('set-cookie', [CookiesController::class, 'setMethod']);
Route::get('get-cookie', [CookiesController::class, 'getMethod']);

Route::get('view-request', function () {
    return view('adf');
});

Route::view('view-request', 'myblade');


Route::get('download', function () {
    $filePath = public_path('files\example.pdf');
    // dd($filePath);
    return response()->download($filePath, 'downloaded_file.pdf')->deleteFileAfterSend();
});

Route::get('file', function () {
    $filePath = public_path('files\example.pdf');
    return response()->file($filePath);
});
