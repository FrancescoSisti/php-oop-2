<?php

namespace App\Exceptions;

use Exception;

class InvalidDataException extends Exception
{
    public function __construct($message = "Dati non validi", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
