<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Mail;

class MailHelper
{
    public static function sendVerification($candidate){
        $data = ['verification' => $candidate->verification];
        Mail::send('candidate.mail.index', $data, function ($message) use ($candidate){
            $message->from('support@jobportal.pk', 'jobportal.PK');
            $message->to($candidate->email, $candidate->name)
            ->subject('Verification Code For Reset Your Password');
        });
    }
      public static function sendIVerification($institute){
        $data = ['verification' => $institute->verification];
        Mail::send('institute.mail.index', $data, function ($message) use ($institute){
            $message->from('support@jobportal.pk', 'jobportal.PK');
            $message->to($institute->email, $institute->name)
            ->subject('Verification Code For Reset Your Password');
        });
    }
        public static function sendSVerification($service){
        $data = ['verification' => $service->verification];
        Mail::send('service.mail.index', $data, function ($message) use ($service){
            $message->from('support@jobportal.pk', 'jobportal.PK');
            $message->to($service->email, $service->name)
            ->subject('Verification Code For Reset Your Password');
        });
    }
}

