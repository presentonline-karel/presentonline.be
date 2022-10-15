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

            <img class="header-service__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
        </div>
    </header>



    <main>

        <!-- PHOTOGRAPHY CAROUSEL -->
        <div class="photography-section section">
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
        <div class="photography-section section">
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
        <div class="photography-section section">
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



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/general/carousel1.js', ['defer' => true]) ?>
<?= js('build/js/general/carousel2.js', ['defer' => true]) ?>
<?= js('build/js/general/carousel3.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>