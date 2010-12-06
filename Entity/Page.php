<?php

namespace Bundle\PageBundle\Entity;

/**
 * Bundle\PageBundle\Entity\Page
 */
class Page
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var integer $id
     */
    private $id;

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string $url
     */
    private $url;

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string $url
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @var string $title
     */
    private $title;

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @var Gadget
     */
    private $gadgets;

    /**
     * Add gadgets
     *
     * @param Gadget $gadgets
     */
    public function addGadgets(\Gadget $gadgets)
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