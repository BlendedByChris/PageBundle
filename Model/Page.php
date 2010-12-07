<?php

namespace Bundle\PageBundle\Model;

abstract class Page
{
    protected $id;
    protected $name;
    protected $url;
    protected $title;
    protected $gadgets;

    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getGadgets() {
        return $this->gadgets;
    }

    public function setGadgets($gadgets) {
        $this->gadgets = $gadgets;
    }



}