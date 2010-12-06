<?php

namespace Bundle\PageBundle\Entity;

use Bundle\PageBundle\Model\PageRepositoryInterface;

class PageRepository extends ObjectRepository implements PageRepositoryInterface {

    public function findOneByUrl($url)
    {
        return $this->findOneBy(array('url' => $url));
    }
}