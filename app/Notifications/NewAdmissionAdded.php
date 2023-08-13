<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewAdmissionAdded extends Notification
{
    use Queueable;
    public function via($notifiable)
    {
        return ['database'];
    }


    public function __construct($student)
    {
        $this->student = $student;
    }

    public function toDatabase($notifiable)
    {
        return [
            'student_id' => $this->student->id,
            'message' => $this->student->firstname.' '. ' has sent a new admission ',
            'url' => '/students/'.$this->student->id.'/edit',
        ];
    }
    
    public function toArray($notifiable)
    {
        return [
            //i need to review this
            'timestamp' => now()->format('Y-m-d H:i:s'),
        ];
    }

    
}
