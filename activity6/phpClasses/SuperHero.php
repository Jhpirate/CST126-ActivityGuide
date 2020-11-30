<?php


class SuperHero
{
    private $name;
    private $health;
    private $isDead;

    /**
     * SuperHero constructor.
     * @param $name
     * @param $health
     */
    public function __construct($name, $health)
    {
        $this->name = $name;
        $this->health = $health;
        $this->isDead = false;
    }

    public function Attack()
    {
        $damage = rand(1,11);
        SuperHero::DetermineHealth($damage);
    }

    public function DetermineHealth($damageValue)
    {
        if(($this->health - $damageValue) < 0){
            $this->isDead = true;
        } else {
            $this->health -= $damageValue;
        }
    }

    public function isDead()
    {
        return $this->isDead;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }


}