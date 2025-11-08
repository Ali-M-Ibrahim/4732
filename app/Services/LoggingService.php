<?php

namespace App\Services;

class LoggingService{

    function addLog($content)
    {
        logger("an error has occured in the application and the error is: " .$content);
    }

}
