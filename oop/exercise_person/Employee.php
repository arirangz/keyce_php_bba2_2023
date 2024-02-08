<?php

require_once "Person.php";

class Employee extends Person
{
    protected string $company;
    protected string $position;

    public function __construct(string $first_name, string $last_name,
                                int $age, string $company, string $position)
    {
        /*$this->setFirstName($first_name);
        $this->setLastName($last_name);
        $this->setAge($age);*/
        parent::__construct($first_name, $last_name, $age);
        $this->setPosition($position);
        $this->setCompany($company);
    }

    /**
     * Get the value of company
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * Set the value of company
     */
    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Set the value of position
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }
}