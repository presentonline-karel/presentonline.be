<?php snippet("general/header") ?>



<!-- HOME CONTAINER -->
<div id="container" class="container container-home">

    <!-- SWITCH LANGUAGES -> In modal steken -->
    <?php /* <nav class="languages">
        <ul>
            <?php foreach ($kirby->languages() as $language) : ?>
                <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                    <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                        <?= html($language->name()) ?>
                    </a>
                    </li>
                <?php endforeach ?>
        </ul>
    </nav> */ ?>



    <!-- HEADER -->
    <header class="header header-home">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER HOME - CONTENT -->
        <div class="header__content header-home__content">
            <h1 class="header__content__title mobile">Uw partner voor <span>websites|</span></h1>
            <h1 class="header__content__title desktop">Wij maken <span>responsive websites</span> & unieke online content.</h1>
            <p>Suspendisse potenti. Curabitur vestibulum, velit in sagittis auctor, erat odio vulputate nisl, a tempor nulla arcu dapibus leo. Suspendisse justo orci, egestas eget facilisis id, semper a nibh.</p>

            <div class="buttons">
                <a class="button button-primary" href="#">What we do<i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
                <a class="button button-secondary" href="#">Starter Kit<i class="anchor-first fa-solid fa-arrow-right"></i></a>
            </div>

            <p class="language">
                <i class="icon-first fa fa-globe" aria-hidden="true"></i>Switch language
            </p>
        </div>
    </header>



    <main>

        <!-- CLIENTS -->
        <div id="clients" class="clients-section section section-small">
            <h3>Onze klanten</h3>

            <!-- Client items -->
            <div class="clients">
                <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client1.svg" alt="Client logo" /></a>
                <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client2.svg" alt="Client logo" /></a>
                <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client1.svg" alt="Client logo" /></a>
                <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client2.svg" alt="Client logo" /></a>
                <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client1.svg" alt="Client logo" /></a>
                <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client2.svg" alt="Client logo" /></a>
            </div>

            <!-- CTA -> To cases -->
            <a class="button button-tertiary large" href="#">What we do for them<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>



        <!-- SERVICES -->
        <?php snippet("home/services"); ?>



        <!-- TESTIMONIALS -->
        <?php snippet("home/testimonials"); ?>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/home/testimonials-slider.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>