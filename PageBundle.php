<?php

namespace Bundle\PageBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ORM\Events as ORMEvents;
use Doctrine\ORM\EntityManager;

class PageBundle extends Bundle {
    /**
     * Get a EntityRepository or a DocumentRepository, based on db driver configuration
     *
     * @param mixed $objectManager a EntityManager or a DocumentManager
     * @param mixed $objectClass the class of the entity or document
     * @return mixed a EntityRepository or DocumentRepository
     */
    public static function getRepository($objectManager, $objectClass) {
        return $objectManager->getRepository($objectClass);
    }

}
