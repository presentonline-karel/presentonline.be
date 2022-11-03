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

                <h1 class="header__content__title">New website for Music2Move</h1>

                <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.<br><br> Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>
            </div>



            <!-- Header images -->
            <div class="header-case__content__images">

                <!-- slider -->
                <?php snippet('general/slider', ['extraClassCases' => '']); ?>
            </div>
        </div>
    </header>



    <main>

        <!-- CHALLENGES -->
        <section id="challenges" class="challenges section">
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
        <section id="next-case" class="next-case section section-medium">
            <h2 class="next-case__title">Next case</h2>

            <div class="next-case__cases">

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
            </div>
        </section>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/general/slider.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>