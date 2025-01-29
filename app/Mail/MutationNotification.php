<?php

namespace App\Mail;

use App\Models\Mutation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MutationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $mutation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Mutation $mutation)
    {
        $this->mutation = $mutation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Notification de Mutation')
                    ->view('emails.mutation_notification')
                    ->with([
                        'matricule' => $this->mutation->agent->matricule,
                        'nom' => $this->mutation->agent->nom,
                        'postnom' => $this->mutation->agent->postnom,
                        'prenom' => $this->mutation->agent->prenom,
                        'newDirection' => $this->mutation->direction->nom_direction,
                        'dateMutation' => $this->mutation->date_mutation,
                    ]);
    }
}
