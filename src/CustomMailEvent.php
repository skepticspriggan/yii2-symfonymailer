<?php

namespace yii\symfonymailer;

use yii\mail\MailEvent;

class CustomMailEvent extends MailEvent
{
    /**
     * @var ?string error message if available
     */
    public $error;
}
