<?php
require_once "SuperHero.php";

class Batman extends SuperHero
{

    /**
     * Batman constructor.
     */
    public function __construct()
    {
        // Call the constructor of the superclass (SuperHero)
        parent::__construct("Batman", rand(1,1001));
    }
}