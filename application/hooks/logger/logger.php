<?php
namespace application\hooks\logger;

use Psr\Log\AbstractLogger;

class logger extends AbstractLogger{

    function __construct($logDirectory, $logLevelThreshold = LogLevel::DEBUG)
    {

    }

    function log($level, $message,array $context = array())
    {

    }



}

