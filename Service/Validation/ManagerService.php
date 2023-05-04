<?php
namespace App\Service\Validation;

use App\Entity\Manager as Entity;
use InvalidArgumentException;

class ManagerService extends StatusCode
{
    public static function Validate(Entity $manager)
    {
        if (empty($manager->getUser())) {
            throw new InvalidArgumentException('User must be set!', self::STATUS_CONFLICT);
        }

        if (empty($manager->getPasswd())) {
            throw new InvalidArgumentException('Password must be set!', self::STATUS_CONFLICT);
        }
    }
}