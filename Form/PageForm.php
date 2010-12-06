<?php

namespace Bundle\PageBundle\Form;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;

use Symfony\Component\Validator\ValidatorInterface;

class PageForm extends Form
{
    public function configure()
    {
      $this->add(new TextField('title'));
      $this->add(new TextField('name'));
      $this->add(new TextField('url'));
    }
}
