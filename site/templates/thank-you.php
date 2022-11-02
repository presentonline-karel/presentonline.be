<?php snippet("general/header") ?>



<!-- THANK YOU CONTAINER -->
<div id="container" class="container container-thank-you">

    <!-- HEADER -->
    <header class="header header-thank-you">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- Header content -->
        <div class="header__content header-thank-you__content">
            <div class="header-thank-you__content__text">
                <p class="button button-tertiary large">Thank you!</p>

                <h1 class="header__content__title">We've received your message</h1>

                <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <h3>Wat meer over ons</h3>

                <a class="button button-primary" href="button button-primary">Over ons<i class="anchor-first fa-solid fa-chevron-right"></i></a>
            </div>

            <img class="header-thank-you__content__img desktop" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="karrel" />
        </div>
    </header>
</div>



<!-- JS SCRIPTS -->
<?php if($page->floatingNavSwitch()->toBool() === true): ?>
    <?= js('build/js/general/nav-fade.js', ['defer' => true]) ?>
<?php endif; ?>



<?php snippet("general/footer") ?>