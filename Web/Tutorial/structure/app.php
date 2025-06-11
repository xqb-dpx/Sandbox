<?php

namespace temp;

class temp
{
    function __construct()
    {
        print ("Constructor");
        ?>
        <br>
        <?php
    }

    public $timeFormat;

    function DateFormatter()
    {
        $this->timeFormat = new \IntlDateFormatter('en_US', \IntlDateFormatter::FULL, \IntlDateFormatter::FULL);
        return $this->timeFormat->format(time());
    }

    function __destruct()
    {
        ?>
        <br>
        <?php
        print ("Destructor");
    }
}