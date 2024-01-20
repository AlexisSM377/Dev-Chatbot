<?php

use App\Http\Controllers\ListMessageController;
use App\Http\Controllers\LocationMessageController;
use App\Http\Controllers\TemplateMessageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/botman', function () {
    app('botman')->listen();
});

Route::get('/test-mensaje', [WhatsAppController::class, 'testEnviodeMensaje']);
Route::get('/test-template', [TemplateMessageController::class, 'templateMessage']);
Route::get('/test-list', [ListMessageController::class, 'listMessage']);
Route::get('/test-location', [LocationMessageController::class, 'locationMessage']);
Route::get('/test-token', [TestController::class, 'verifyWebhook']);

Route::get('/send-test-message', [WhatsAppController::class, 'sendTestMessage']);

