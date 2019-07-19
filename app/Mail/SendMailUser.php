<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailUser extends Mailable
{
    use Queueable, SerializesModels;

    protected $inputs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
        $this->inputs = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    // Indo na View Contato.blade.php e jogando as informações para dentro
    public function build()
    {
        return $this->view('contato')
                    ->with([
                        'name' => $this->inputs['name'],
                        'email' => $this->inputs['email'],
                        'mensagem' => $this->inputs['mensagem'],
                    ]);
    }
}
