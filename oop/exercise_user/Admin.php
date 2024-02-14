<?php

require_once "User.php";

class Admin extends User
{
    protected int $admin_level;

    public function __construct(string $first_name, string $last_name, string $email, string $password, int $admin_level)
    {
        parent::__construct($first_name, $last_name, $email, $password);
        $this->setAdminLevel($admin_level);
    }

    /**
     * Get the value of admin_level
     */
    public function getAdminLevel(): int
    {
        return $this->admin_level;
    }

    /**
     * Set the value of admin_level
     */
    public function setAdminLevel(int $admin_level): self
    {
        $this->admin_level = $admin_level;

        return $this;
    }
}