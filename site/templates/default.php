<?php snippet("general/header") ?>



<!-- ERROR CONTAINER -->
<div id="container" class="container container-error">

    <!-- NAV -->
    <?php snippet('general/nav') ?>



    <!-- Error content -->
    <section class="error-content">
        <h1>Oooppsss</h1>
        <p>This page doesn’t exist</p>

        <a class="button button-primary">Home<i class="anchor-first fa-solid fa-chevron-right"></i></a>
    </section>
</div>



<!-- JS SCRIPTS -->
<?php if($page->floatingNavSwitch()->toBool() === true): ?>
    <?= js('build/js/general/nav-fade.js', ['defer' => true]) ?>
<?php endif; ?>



<?php snippet("general/footer") ?>