<?php

declare(strict_types=1);

namespace App\Service\CRM;

use App\Entity\ClientCRM;
use Exception;
use App\Sender;

class BazSender extends Sender
{
    /**
     * Sends data to the Baz crm
     *
     * @param ClientCRM $clientCRM
     * @return int
     * @throws Exception
     */
    public function send(ClientCRM $clientCRM): int
    {
        try{
            //@todo Do not implement a logic for send specifically. Imagine that it's here.
        }
        catch (Exception $e){
            throw new Exception($e->getMessage(), $e->getCode());
        }

        return self::STATUS_SUCCESS;
    }
}
