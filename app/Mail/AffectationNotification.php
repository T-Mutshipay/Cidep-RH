<?php

namespace App\Mail;

use App\Models\Affectation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AffectationNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $affectation;

    public function __construct(Affectation $affectation)
    {
        $this->affectation = $affectation;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->subject('Notification d\'Affectation')
                    ->view('emails.affectation_notification')
                    ->with([
                        'matricule' => $this->affectation->agent->matricule,
                        'nom' => $this->affectation->agent->nom,
                        'postnom' => $this->affectation->agent->postnom,
                        'prenom' => $this->affectation->agent->prenom,
                        'newService' => $this->affectation->service->nom_service,
                        'dateaffectation' => $this->affectation->date_affectation,
                    ]);
    }
}
