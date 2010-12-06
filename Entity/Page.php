<?php

namespace Bundle\PageBundle\Entity;

use Bundle\PageBundle\Model\Page as BasePage;

/**
 * Bundle\PageBundle\Entity\Page
 */
abstract class Page extends BasePage
{

    /**
     * Add gadgets
     *
     * @param Bundle\PageBundle\Entity\Gadget $gadgets
     */
    public function addGadgets(\Bundle\PageBundle\Entity\Gadget $gadgets)
    {
        $this->gadgets[] = $gadgets;
    }

    /**
     * Get gadgets
     *
     * @return Doctrine\Common\Collections\Collection $gadgets
     */
    public function getGadgets()
    {
        return $this->gadgets;
    }
}