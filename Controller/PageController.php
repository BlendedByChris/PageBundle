<?php

namespace Bundle\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Bundle\PageBundle\Entity\Page,
    Bundle\PageBundle\Form\PageForm;


class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('PageBundle:Page:index.php');
    }

    public function showAction($url)
    {
//        $em = $this->get('doctrine.orm.entity_manager');
//        $query = $em->createQueryBuilder()
//            ->select('p')
//            ->from('PageBundle:Page', 'p')
//            ->where('p.url = :url')
//            ->setParameter('url', $url)
//            ->getQuery();
//        $page = $query->getSingleResult();

        $page = $this->get('page.repository.page')->findOneByUrl($url);

        return $this->render('PageBundle:Page:show.php', array('page' => $page));
    }

    public function editAction($id)
    {
      $form = $this->getForm();
    }


    public function newAction()
    {
        $form = $this->getForm(new Page());        
        
        return $this->render('PageBundle:Page:new.php', array(
            'form' => $form
        ));
    }
    
    public function createAction()
    {
      $form = $this->getForm(new Page());
      $form->bind($this->get('request')->request->get($form->getName()));
      
      $this->savePage($form->getData());  

    }
    
    protected function getForm($object = null)
    {
      return new PageForm('page', $object, $this->get('validator'));
    }
    
    protected function savePage(Page $page)
    {
        $entityManager = $this->get('doctrine.orm.entity_manager');
        $entityManager->persist($page);
        $entityManager->flush();
    }
}
