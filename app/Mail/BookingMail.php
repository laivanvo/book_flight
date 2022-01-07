<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.booking')->from('laixuantruong2000s@gmail.com', 'web đặt vé máy bay uy tín chất lượng')
                    ->subject('[an_tuyến_võ] Thư xác nhận đặt vé máy bay')
                    ->with($this->data);
    }
}
