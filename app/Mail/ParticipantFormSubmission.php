<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Participant;

class ParticipantFormSubmission extends Mailable
{
    use Queueable, SerializesModels;

    public $fields = [];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Participant $participant)
    {
        $fields = collect($participant)->except(['id', 'created_at', 'updated_at']);
        $this->fields = $fields->keyBy(function($item, $key) {
            return ucwords(str_replace('_',' ',$key));
        });
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->to(config('mail.hoap_administrator_email'))
                    ->markdown('emails.participant.submission');
    }
}
