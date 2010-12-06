<?php $view->extend('PageBundle::layout.php') ?>

<?php $view['slots']->set('title', $page->getTitle()) ?>
<h2><?php echo $page->getName() ?></h2>