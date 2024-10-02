<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;
    private $post_id;
    private $user_create;
    private $title;

    public function __construct($post_id, $user_create, $title)
    {
        $this->post_id = $post_id;
        $this->user_create = $user_create;
        $this->title = $title;
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    // ======================== ** && ---------  Function ---------&& ** ========================
    public function toArray(object $notifiable): array
    {
        return [
            'post_id' => $this->post_id,
            'user_create' => $this->user_create,
            // 'user_create' => auth()->user()->name,
            'title' => $this->title
        ];
    }
}
