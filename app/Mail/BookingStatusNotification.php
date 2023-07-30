<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;

class BookingStatusNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $status;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking, $status)
    {
        $this->booking = $booking;
        $this->status = $status;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Booking Status Notification',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        $statusText = $this->status === 'accepted' ? 'accepted' : 'rejected';

        if ($this->status === 'accepted') {
            return $this->subject('Booking Accepted')
                        ->view('booking.booking_accepted_renter', [
                            'statusText' => $statusText,
                            'booking' => $this->booking,
                        ]);
        } else {
            return $this->subject('Booking Rejected')
                        ->view('booking.booking_rejected_renter', [
                            'statusText' => $statusText,
                            'booking' => $this->booking,
                        ]);
        }
    }

}
