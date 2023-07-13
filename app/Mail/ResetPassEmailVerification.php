<?php

namespace App\Mail;

use App\Models\Account;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassEmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $account;
    public $verificationToken;

    public function __construct(Account $account, $verificationToken)
    {
        $this->account = $account;
        $this->verificationToken = $verificationToken;
    }

    public function build()
    {
        return $this->view('Public.pages.auth.mail.reset-pass-verify')
            ->subject('Xác nhận thay đổi mật khẩu');
    }
}