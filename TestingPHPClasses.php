<?php


class TestingPHPClasses
{
    private $name;
    private $age;

    /**
     * TestingPHPClasses constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return TestingPHPClasses
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return TestingPHPClasses
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

}