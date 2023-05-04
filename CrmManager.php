<?php

declare(strict_types=1);

namespace App;

use App\Entity\ClientCRM;
use App\Entity\Manager;
use App\Service\CRM\BazSender;
use App\Service\Validation\ManagerService;
use App\Service\Validation\StatusCode;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager extends StatusCode
{
    private BazSender $client;

    /**
     * @var Manager
     */
    private Manager $manager;

    public function __construct(Manager $manager)
    {
        ManagerService::Validate($manager);
        $this->manager = $manager;
    }

    /**
     * Sends the person to a crm
     *
     * @param ClientCRM $clientCRM
     * @return int
     * @throws \Exception
     */
    public function sendPerson(ClientCRM $clientCRM): int
    {
        $this->client->setCredentials($this->manager);

        switch ($clientCRM->getCrm()) {
            case 'BazSender':
                $this->client = new BazSender();
                break;
            default:
                return self::STATUS_NOT_FOUND;
        }

        return $this->client->send($clientCRM);
    }
}
