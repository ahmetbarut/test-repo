<?php

use Illuminate\Support\Facades\Mail;

Mail::raw('Bu bir test e-postasıdır.', function ($message) {
    $message->to('ornek@example.com')
            ->subject('Test E-postası');
});
