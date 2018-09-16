<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    private $article;
    private $destinataire;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($article,$destinataire)
    {

        $this->article = $article;
        $this->destinataire = $destinataire;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $this->from("newsletter@380degres.com");
        $this->to($this->destinataire->email,$this->destinataire->nom);


        return $this->view("mail.newsletter_email")->with(["article"=>$this->article]);
    }


}
