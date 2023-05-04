<?php

namespace App\Entity;

class ClientCRM
{

    /**
     * @var string
     */
    private string $crm;

    /**
     * @return string
     */
    public function getCrm(): string
    {
        return $this->crm;
    }

    /**
     * @param string $crm
     */
    public function setCrm(string $crm): void
    {
        $this->crm = $crm;
    }


}