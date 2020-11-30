<?php
require_once "SuperHero.php";

class Superman extends SuperHero
{
    /**
     * Superman constructor.
     */
    public function __construct()
    {
        // Call parent constructor
        parent::__construct("Superman", rand(1,1001));
    }
}