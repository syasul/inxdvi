<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

use Illuminate\Support\Facades\Schedule;

// Schedule the AI blog generation command to run twice daily (at 9:00 and 17:00)
Schedule::command('app:generate-blog')->twiceDaily(9, 17);

