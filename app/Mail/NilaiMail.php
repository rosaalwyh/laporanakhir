<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NilaiMail extends Mailable
{
    use Queueable, SerializesModels;
    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from SIPKL DKT Baturaja')
                    ->view('page.admin.nilai.email-surat')
                    ->attach($this->details['nilai_seminar']->getRealPath(),[
                        'as' => $this->details['nilai_seminar']->getClientOriginalName()
                    ]);
    }
}
