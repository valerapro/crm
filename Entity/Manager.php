<?php

namespace App\Entity;

class Manager
{

    /**
     * @var string
     */
    private string $user;

    /**
     * @var string
     */
    private string $passwd;

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getPasswd(): string
    {
        return $this->passwd;
    }

    /**
     * @param string $passwd
     */
    public function setPasswd(string $passwd): void
    {
        $this->passwd = $passwd;
    }

    public function toArray(): array
    {
        return json_decode(json_encode($this), true);
    }

}