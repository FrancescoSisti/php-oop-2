<?php

namespace App\Traits;

trait LoggableTrait
{
    public function log($message)
    {
        // In un'applicazione reale, qui si potrebbe utilizzare un sistema di logging più robusto
        error_log("[" . date('Y-m-d H:i:s') . "] " . $message);
    }
}
