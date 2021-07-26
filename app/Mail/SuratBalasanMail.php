<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SuratBalasanMail extends Mailable
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
        $no_surat_balasan = $this->details['no_surat_balasan'];
        return $this->subject('Mail from SIPKL DKT Baturaja', compact('no_surat_balasan'))
                    ->view('page.admin.suratbalasan.email-surat')
                    ->attach($this->details['surat_balasan']->getRealPath(),[
                        'as' => $this->details['surat_balasan']->getClientOriginalName()
                    ]);
    }
}
