<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
  use Queueable, SerializesModels;

  public $topic;

  public function __construct(string $topic)
  {
    $this->topic = $topic;
  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
    return $this->markdown('emails.contact-me-markdown');
    // return $this->view('emails.contact-me')->subject('Infromation about ' . $this->topic);
  }
}
