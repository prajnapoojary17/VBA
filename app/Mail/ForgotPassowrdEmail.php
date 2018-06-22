<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgotPassowrdEmail extends Mailable
{
    use Queueable, SerializesModels;

	protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userDetail)
    {
        //
		$this->user=$userDetail;
		
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('home.forgot_password_template')->with(['url'=>'https://laravel.com/docs/5.4/mail#sending-mail','user'=>$this->user]);
    }
}
