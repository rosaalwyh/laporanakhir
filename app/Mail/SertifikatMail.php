<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SertifikatMail extends Mailable
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
        $no_sertifikat = $this->details['no_sertifikat'];
        return $this->subject('Mail dari SIPKL DKT Baturaja', compact('no_sertifikat'))
                    ->view('page.admin.sertifikat.email-surat')
                    ->attach($this->details['sertifikat']->getRealPath(),[
                        'as' => $this->details['sertifikat']->getClientOriginalName()
                    ]);
    }
}
