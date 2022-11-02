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
                    <a class="breadcrumb" href="#">SERVICE</a>
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
        <section id="service-features" class="service-features-section section section-large">
            <h2 class="service-features-section__title">De juiste oplossing voor uw project</h2>
            <p class="service-features-section__p">Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele.</p>

            <a class="button button-tertiary large mobile">We offer 3 kits<i class="anchor-first fa-solid fa-arrow-down"></i></a>

            <!-- Kits -->
            <div class="kits cards">

                <!-- Starter Kit -->
                <a class="kit card">
                    <div>
                        <div class="card__icon-container">
                            <span>01</span>
                        </div>

                        <h3 class="card__title">Starter Kit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                        <div class="features">
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                        </div>
                    </div>

                    <button class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></button>
                </a>

                <!-- Advanced Kit -->
                <div class="kit card">
                    <div>
                        <div class="card__icon-container">
                            <span>02</span>
                        </div>

                        <h3 class="card__title">Advanced kit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                        <div class="features">
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                        </div>
                    </div>
                </div>

                <!-- Custom Kit -->
                <a class="kit card">
                    <div>
                        <div class="card__icon-container">
                            <span>03</span>
                        </div>

                        <h3 class="card__title">Custom kit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                        <div class="features">
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                        </div>
                    </div>

                    <button class="button button-tertiary" href="#">Free quotation<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></button>
                </a>
            </div>
        </section>



        <!-- PHOTOGRAPHY SECTIONS -->
        <main id="photography-sections">

            <!-- PHOTOGRAPHY CAROUSEL -->
            <div class="photography-section section section-medium">
                <h3 class="photography-section__title">GAGK Rupelstreek</h3>

                <div class="carousel carousel-1">
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                </div>
            </div>

            <!-- PHOTOGRAPHY CAROUSEL -->
            <div class="photography-section section section-medium">
                <h3 class="photography-section__title">KdG FabLab</h3>

                <div class="carousel carousel-2">
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                </div>
            </div>

            <!-- PHOTOGRAPHY CAROUSEL -->
            <div class="photography-section section section-medium">
                <h3 class="photography-section__title">Turnkring Energym</h3>

                <div class="carousel carousel-3">
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                    </div>
                    <div class="carousel__slide">
                        <img class="carousel__slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                    </div>
                </div>
            </div>
        </main>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>



        <!-- CASES CAROUSEL -->
        <div id="cases" class="carousel-section section section-medium">
            <h2 class="carousel-section__title">Website cases</h2>

            <div class="carousel carousel-1">
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
        </div>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/general/carousel1.js', ['defer' => true]) ?>
<?= js('build/js/general/carousel2.js', ['defer' => true]) ?>
<?= js('build/js/general/carousel3.js', ['defer' => true]) ?>
<?= js('build/js/general/nav-fade.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>