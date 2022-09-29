<?php snippet("general/header") ?>



<!-- WEBSITES & -APPS CONTAINER -->
<div id="container" class="container container-websites-apps">

    <!-- HEADER -->
    <header class="header header-service">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- Header content -->
        <div class="header__content header-service__content">

            <!-- text -->
            <div class="header-service__content__text">

                <!-- breadcrumbs -->
                <div class="breadcrumbs">
                    <a class="breadcrumb" href="#">Services</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a class="breadcrumb" href="#">Websites &-apps</a>
                </div>

                <h1 class="header__content__title">Responsive websites & -apps</h1>

                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <a class="button button-tertiary large desktop">We offer 3 kits<i class="anchor-first fa-solid fa-arrow-down"></i></a>
            </div>

            <img class="header-service__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
        </div>
    </header>



    <main>
        <!-- KITS -->
        <section class="kits-section section">
            <h2 class="kits-section__title">De juiste oplossing voor uw project</h2>
            <p class="kits-section__p">Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele.</p>

            <a class="button button-tertiary large mobile">We offer 3 kits<i class="anchor-first fa-solid fa-arrow-down"></i></a>

            <!-- Kits -->
            <div class="kits cards">

                <!-- Starter Kit -->
                <div class="kit card">
                    <div class="card__icon-container">
                        <span>01</span>
                    </div>

                    <h3 class="card__title">Starter Kit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                    <a class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>

                <!-- Advanced Kit -->
                <div class="kit card">
                    <div class="card__icon-container">
                        <span>02</span>
                    </div>

                    <h3 class="card__title">Advanced kit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
                </div>

                <!-- Custom Kit -->
                <div class="kit card">
                    <div class="card__icon-container">
                        <span>03</span>
                    </div>

                    <h3 class="card__title">Custom kit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                    <a class="button button-tertiary" href="#">Free quotation<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>



        <?php /*
        <!-- Header images -->
        <div class="header-case__content__images slider-container carousel">

            <div class="carousel__slide">
                
                <!-- Case -->
                <div class="case carousel__slide__img" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

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

            <div class="carousel__slide">
                
                <!-- Case -->
                <div class="case carousel__slide__img" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

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

            <div class="carousel__slide">
                
                <!-- Case -->
                <div class="case carousel__slide__img" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

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
        </div>
        */ ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/general/carousel.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>