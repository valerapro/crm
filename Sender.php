<?php

declare(strict_types=1);

namespace App;

use App\Entity\Manager;
use App\Service\Validation\StatusCode;

class Sender extends StatusCode
{
    protected Manager $manager;

    public function setCredentials(Manager $manager)
    {
        $this->manager = $manager;
    }
}