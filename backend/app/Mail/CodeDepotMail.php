<?php

namespace App\Mail;

use App\Models\CodeBox;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CodeDepotMail extends Mailable
{
    use Queueable, SerializesModels;

    public CodeBox $codeBox;

    public function __construct(CodeBox $codeBox)
    {
        $this->codeBox = $codeBox;
    }

    public function build()
    {
        
    }
}