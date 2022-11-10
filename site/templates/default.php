<?php snippet("general/header") ?>



<!-- ERROR CONTAINER -->
<div id="container" class="container container-error">

    <!-- NAV -->
    <?php snippet("general/nav") ?>



    <!-- Error content -->
    <section class="error-content">
        <h1><?= $page->errorPageTitle() ?></h1>
        <p><?= $page->errorPageParagraph() ?></p>

        <a class="button button-primary" href="<?= $pages->find("home")->url() ?>">Home<i class="anchor-first fa-solid fa-chevron-right"></i></a>
    </section>
</div>



<?php snippet("general/footer") ?>