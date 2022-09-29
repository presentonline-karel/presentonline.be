<?php snippet("general/header") ?>



<!-- PHOTOGRAPHY CONTAINER -->
<div id="container" class="container container-photography">

    <!-- HEADER -->
    <header class="header header-service header-photography">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- Header content -->
        <div class="header__content header-service__content header-photography__content">

            <!-- text -->
            <div class="header-service__content__text header-photography__content__text">

                <!-- breadcrumbs -->
                <div class="breadcrumbs">
                    <a class="breadcrumb" href="#">Services</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a class="breadcrumb" href="#">Photography</a>
                </div>

                <h1 class="header__content__title">A picture says more than 1000...</h1>

                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <a class="button button-tertiary large">Enkele fotoshoots<i class="anchor-first fa-solid fa-arrow-down"></i></a>
            </div>

            <img class="header-service__content__img desktop" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
        </div>
    </header>



    <main>
        <?php /*
        <!-- CASES -->
        <section class="cases section">
            <h2>Website cases</h2>

            <!-- Cases carousel -->
            <div class="header-case__content__images">
                <div class="header-case__content__images__carousel">
                    <img src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
                    <img src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
                </div>

                <div class="arrows">
                    <i class="fa-solid fa-arrow-left"></i>
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
        </section>
        */ ?>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<?php snippet("general/footer") ?>