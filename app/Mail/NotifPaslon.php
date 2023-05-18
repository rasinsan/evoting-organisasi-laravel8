<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Capaslon;
use App\Models\Paslon;

class NotifPaslon extends Mailable
{
    use Queueable, SerializesModels;
    public $kirim;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kirim)
    {
        $this->kirim = $kirim;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $paslon = Paslon::all();
        $capaslon = Capaslon::all();
        return $this->subject('Mail from evoting')
        ->view('mail/notif_paslon', compact('capaslon','paslon'));
    }
}
