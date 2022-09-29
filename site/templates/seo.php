<?php snippet("general/header") ?>



<!-- SEO CONTAINER -->
<div id="container" class="container container-seo">

    <!-- HEADER -->
    <header class="header header-seo">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- Header content -->
        <div class="header__content header-seo__content">

            <!-- text -->
            <div class="header-seo__content__text">

                <!-- breadcrumbs -->
                <div class="breadcrumbs">
                    <a class="breadcrumb" href="#">Services</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a class="breadcrumb" href="#">SEO</a>
                </div>

                <h1>SEO voor uw website</h1>

                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <a class="button button-tertiary large desktop">Onze aanpak<i class="anchor-first fa-solid fa-arrow-down"></i></a>
            </div>

            <img class="header-websites-apps__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
        </div>
    </header>



    <!-- STEPS -->
    <section class="steps-section section">
        <h2 class="steps-section__title">Wordt vriendjes met Google</h2>
        <p class="steps-section__p">Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele.</p>

        <a class="button button-tertiary large mobile">Onze aanpak<i class="anchor-first fa-solid fa-arrow-down"></i></a>

        <!-- Steps -->
        <div class="steps">

            <!-- Starter Kit -->
            <div class="step service">
                <div class="service__icon-container">
                    <span>01</span>
                </div>

                <h3>Analyse van huidige website</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                <a class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>

            <!-- Advanced Kit -->
            <div class="step service">
                <div class="service__icon-container">
                    <span>02</span>
                </div>

                <h3>Voorstel van veranderingen</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
            </div>

            <!-- Custom Kit -->
            <div class="ste^p service">
                <div class="service__icon-container">
                    <span>03</span>
                </div>

                <h3>Voorstel uitvoeren</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                <a class="button button-tertiary" href="#">Free quotation<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>



    <!-- CTA -->
    <div class="cta" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/cta.png');">
        <h3>Wat SEO kan betekenen voor uw bedrijf?</h3>

        <div class="features">
            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
        </div>

        <a class="button button-white" href="#">Gratis offerte<i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>
</div>



<?php snippet("general/footer") ?>