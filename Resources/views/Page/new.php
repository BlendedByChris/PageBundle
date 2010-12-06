<?php $view->extend('PageBundle::layout.php') ?>

<form action="/app_dev.php/page/create" method="post">
    <?php echo $view['form']->render($form) ?>

    <input type="submit" value="Send!" />
</form>