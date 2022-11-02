<?php snippet("general/header") ?>



<!-- ABOUT CONTAINER -->
<div id="container" class="container container-about">

    <!-- HEADER -->
    <header class="header header-about">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER ABOUT - CONTENT -->
        <div class="header__content header-about__content">
            <h4 class="header-about__content__title desktop">Over ons</h4>

            <div class="header-about__content__text">
                <h1 class="header__content__title">Wat meer info over ons</h1>
                <p>Suspendisse potenti. Curabitur vestibulum, velit in sagittis auctor, erat odio vulputate nisl, a tempor nulla arcu dapibus leo.</p>

                <a class="button button-primary" href="#">Lees meer<i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </header>



    <main>

        <!-- ABOUT -->
        <section id="about" class="about section section-medium flex">

            <!-- ABOUT TEXT -->
            <div class="about__text">
                <div class="about__text__title flex">
                    <h2>I'm Karel</h2>
                    <img src="<?= $site->url() ?>/../assets/img/hand.svg" alt="Waving hand" />
                </div>

                <div class="about__text__photos mobile flex">
                    <img src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Karel" />
                    <img src="<?= $site->url() ?>/../assets/img/karel_back.webp" alt="Karel2" />
                </div>

                <p class="about__text__p">Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.<br><br> Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <!-- About numbers -->
                <div class="about__text__numbers">

                    <!-- number -->
                    <div class="number-container">
                        <div class="number">50+</div>
                        <div class="label">Projects</div>
                    </div>

                    <!-- number -->
                    <div class="number-container">
                        <div class="number">50+</div>
                        <div class="label">Projects</div>
                    </div>

                    <!-- number -->
                    <div class="number-container">
                        <div class="number">50+</div>
                        <div class="label">Projects</div>
                    </div>

                    <!-- number -->
                    <div class="number-container">
                        <div class="number">50+</div>
                        <div class="label">Projects</div>
                    </div>
                </div>
            </div>

            <!-- ABOUT PHOTOS -->
            <div class="about__photos desktop">
                <img src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Karel" />
                <img src="<?= $site->url() ?>/../assets/img/karel_back.webp" alt="Karel2" />
            </div>
        </section>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?php if($page->floatingNavSwitch()->toBool() === true): ?>
    <?= js('build/js/general/nav-fade.js', ['defer' => true]) ?>
<?php endif; ?>



<?php snippet("general/footer") ?>