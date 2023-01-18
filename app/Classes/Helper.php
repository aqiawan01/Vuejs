<?php
namespace App\Classes;
use Illuminate\Support\Facades\Mail;

class Helper
{
    public static function sendEmail($file, $parameter, $use)
    {
        try {
            Mail::send('emails.'.$file, $parameter, function ($message) use ($use) {
                $message->to($use['email'], $use['name'])->bcc(['test@dynout.com'])->subject($use['subject']);
                $message->from('support@reignsol.com', 'Dynout');
            });
        } catch (\Exception $ex) {
            // dd($ex);
        }
    }
}