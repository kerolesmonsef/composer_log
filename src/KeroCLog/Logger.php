<?php

namespace KeroCLog;

class Logger
{
    public function __construct()
    {

    }

    public function log($var)
    {
        $var = is_array($var) ? $var : func_get_args();
    }
}