<?php snippet("general/header") ?>



<!-- WEBSITES & -APPS CONTAINER -->
<div id="container" class="container container-websites-apps">

    <!-- HEADER -->
    <header class="header header-websites-apps">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- Header content -->
        <div class="header__content header-websites-apps__content">

            <!-- text -->
            <div class="header-websites-apps__content__text">

                <!-- breadcrumbs -->
                <div class="breadcrumbs">
                    <a class="breadcrumb" href="#">Cases</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a class="breadcrumb" href="#">Music2Move</a>
                </div>

                <h1>Responsive websites & -apps</h1>

                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <a class="button button-tertiary large desktop">We offer 3 kits<i class="anchor-first fa-solid fa-arrow-down"></i></a>
            </div>

            <img class="header-websites-apps__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" />
        </div>
    </header>



    <!-- KITS -->
    <section class="kits-section section">
        <h2 class="kits-section__title">De juiste oplossing voor uw project</h2>
        <p class="kits-section__p">Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele.</p>

        <a class="button button-tertiary large mobile">We offer 3 kits<i class="anchor-first fa-solid fa-arrow-down"></i></a>

        <!-- Kits -->
        <div class="kits">

            <!-- Starter Kit -->
            <div class="kit service">
                <div class="service__icon-container">
                    <span>01</span>
                </div>

                <h3>Starter Kit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                <a class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>

            <!-- Advanced Kit -->
            <div class="kit service">
                <div class="service__icon-container">
                    <span>02</span>
                </div>

                <h3>Advanced kit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
            </div>

            <!-- Custom Kit -->
            <div class="kit service">
                <div class="service__icon-container">
                    <span>03</span>
                </div>

                <h3>Custom kit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                <a class="button button-tertiary" href="#">Free quotation<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>



    <!-- CTA -->
    <div class="cta" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/cta.png');">
        <h3>Lastig kiezen? Vraag ons om advies.</h3>
        <a class="button button-white" href="#">Contacteer ons<i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>



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
</div>



<?php snippet("general/footer") ?>