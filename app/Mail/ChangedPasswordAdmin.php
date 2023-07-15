<?php

namespace App\Mail;

use App\Models\Account;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChangedPasswordAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $account;
    public $verificationToken;

    public function __construct(Account $account)
    {
        $this->account = $account;
    }

    public function build()
    {
        return $this->view('admin.pages.auth.mail.changed-pass')
            ->subject('Thay đổi mật khẩu thành công');
    }
}