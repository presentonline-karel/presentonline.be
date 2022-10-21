<?php snippet("general/header") ?>



<!-- SEO CONTAINER -->
<div id="container" class="container container-seo">

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
                    <a class="breadcrumb" href="#">SEO</a>
                </div>

                <h1 class="header__content__title">SEO voor uw website</h1>

                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <a class="button button-tertiary large desktop">Onze aanpak<i class="anchor-first fa-solid fa-arrow-down"></i></a>
            </div>

            <img class="header-service__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
        </div>
    </header>



    <main>

        <!-- STEPS -->
        <section id="service-features" class="service-features-section section section-large">
            <h2 class="service-features-section__title">Wordt vriendjes met Google</h2>
            <p class="service-features-section__p">Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele.</p>

            <a class="button button-tertiary large mobile">Onze aanpak<i class="anchor-first fa-solid fa-arrow-down"></i></a>

            <!-- Steps -->
            <div class="steps cards">

                <!-- Starter Kit -->
                <div class="step card">
                    <div>
                        <div class="card__icon-container">
                            <span>01</span>
                        </div>

                        <h3 class="card__title">Analyse van huidige website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
                    </div>
                </div>

                <!-- Advanced Kit -->
                <div class="step card">
                    <div>
                        <div class="card__icon-container">
                            <span>02</span>
                        </div>

                        <h3 class="card__title">Voorstel van veranderingen</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
                    </div>
                </div>

                <!-- Custom Kit -->
                <div class="step card">
                    <div>
                        <div class="card__icon-container">
                            <span>03</span>
                        </div>

                        <h3 class="card__title">Voorstel uitvoeren</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
                    </div>
                </div>
            </div>
        </section>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<?php snippet("general/footer") ?>