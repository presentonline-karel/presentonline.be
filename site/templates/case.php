<?php snippet("general/header") ?>



<!-- CASE CONTAINER -->
<div id="container" class="container container-case">

    <!-- HEADER -->
    <header class="header header-case">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER CASE - CONTENT -->
        <div class="header__content header-case__content">

            <!-- Header text -->
            <div class="header-case__content__text">

                <!-- breadcrumbs -->
                <div class="breadcrumbs">
                    <a class="breadcrumb" href="#">Cases</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a class="breadcrumb" href="#">Music2Move</a>
                </div>

                <!-- tags -->
                <div class="tags">
                    <span class="tag">Website</span>
                    <span class="tag">Photos</span>
                </div>

                <h1>Responsive website for Music2Move</h1>

                <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.<br><br> Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>
            </div>

            <!-- Header images -->
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
        </div>
    </header>



    <!-- CHALLENGES -->
    <section class="challenges section">
        <img class="challenges__img desktop" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />

        <div class="challenges__text">
            <h2>Challenges & successes</h2>

            <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

            <div class="features">
                <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
            </div>

            <a class="button button-primary" href="#">Live preview<i class="anchor-first fa-solid fa-arrow-right"></i></a>
        </div>
    </section>



    <!-- NEXT CASE -->
    <section class="next-case section">
        <h2 class="next-case__title">Next case</h2>

        <!-- Case -->
        <div class="case" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

            <!-- case button -->
            <a class="button button-tertiary" href="#">READ CASE<i class="anchor-first fa-solid fa-arrow-right"></i></a>

            <!-- case text -->
            <div class="case__id">
                <h2 class="case__id__title">Music2Move</h2>

                <div class="tags">
                    <span class="tag">Website</span>
                    <span class="tag">Photos</span>
                </div>
            </div>
        </div>
    </section>



    <!-- CTA -->
    <section class="cta" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/cta.png');">
        <h3>Laat dat coderen maar aan ons over</h3>
        <a class="button button-white" href="#">Contacteer ons<i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </section>
</div>



<?php snippet("general/footer") ?>