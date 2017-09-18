<?php
// Creator: BeSmart
// Time: 18/09/17 17:43
// Location: Uzbekistan Tashkent

use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sms/send/{to}', function(\Nexmo\Client $nexmo, $to){
    $message = $nexmo->message()->send([
        'title' => 'Ohho LLC',
        'to' => $to,
        'url' => 'https://project.ohho.uz/portfolio',
        'from' => '998903494310',
        'text' => 'Free 30 sms around the world By Nexmo'
    ]);
    Log::info('sent message: ' . $message['message-id']);
});