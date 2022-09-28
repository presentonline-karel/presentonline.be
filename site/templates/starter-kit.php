<?php snippet("general/header") ?>



<!-- STARTER KIT CONTAINER -->
<div id="container" class="container container-starter-kit">

    <!-- HEADER -->
    <header class="header header-starter-kit">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER STARTER KIT - CONTENT -->
        <div class="header__content header-starter-kit__content">
            <h1>Proffesionele website nodig voor een klein budget?</h1>
            <p>Suspendisse potenti. Curabitur vestibulum, velit in sagittis auctor, erat odio vulputate nisl, a tempor nulla arcu dapibus leo.</p>

            <div class="buttons">
                <a class="button button-primary" href="#">Get it now<i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
                <a class="button button-secondary" href="#">Preview<i class="anchor-first fa-solid fa-arrow-right"></i></a>
            </div>

            <p class="language">
                <i class="icon-first fa fa-globe" aria-hidden="true"></i>Switch language
            </p>

            <img class="header-starter-kit__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="karrel" />
        </div>
    </header>



    <!-- INTRO -->
    <section class="intro section">
        <h2>Present Online Starter Kit, gedaan met dat geknoei</h2>
        <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.<br><br> Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

        <a class="button button-tertiary large">Ontdek de Starter Kit<i class="anchor-first fa-solid fa-arrow-down"></i></a>
    </section>



    <!-- FEATURES -->
    <section class="features-section section">
        <h2>What is the PO Starter Kit?</h2>
        <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

        <h3>Handy features</h3>

        <div class="features">
            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
            <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
        </div>

        <a class="button button-primary" href="#">Preview<i class="anchor-first fa-solid fa-arrow-right"></i></a>
    </section>



    <!-- INCLUDES -->
    <section class="includes section">

        <!-- Included box - text -->
        <div class="includes__text includes__box">
            <h2>What's included?</h2>

            <div class="desktop">
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een.</p>

                <h3>Handy features</h3>

                <div class="features">
                    <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                    <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                    <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                </div>
            </div>
        </div>

        <!-- Included box - feature -->
        <div class="includes__feature includes__box service">
            <div class="service__icon-container">
                <i class="fa-solid fa-keyboard"></i>
            </div>

            <h3>Professionele website</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

            <a class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <!-- Included box - feature -->
        <div class="includes__feature includes__box service">
            <div class="service__icon-container">
                <i class="fa-solid fa-pencil"></i>
            </div>

            <h3>CMS panel</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

            <a class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>

        <!-- Included box - feature -->
        <div class="includes__feature includes__box service">
            <div class="service__icon-container">
                <i class="fa-solid fa-thumbs-up"></i>
            </div>

            <h3>Support</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
        </div>

        <!-- Included box - feature -->
        <div class="includes__feature includes__box service">
            <div class="service__icon-container">
                <i class="fa-solid fa-check"></i>
            </div>

            <h3>And much more</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

            <div class="features">
                <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
            </div>
        </div>

        <!-- Included box - price -->
        <div class="includes__price includes__box">
            <h3>Vanaf</h3>

            <h2>€499</h2>

            <div class="buttons">
                <a class="button button-primary" href="#">Get it now</a>
                <a class="button button-secondary" href="#">Preview<i class="anchor-first fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </section>



    <!-- TESTIMONIALS
    <div class="testimonials section">
        <div class="testimonial__text">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>

            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus.”</p>

            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>

        <div class="testimonial__id">
            <img class="testimonial__id__picture" src="<?php //$site->url() 
                                                        ?>/../assets/img/employee.webp" alt="Employee" />

            <div class="testimonial__id__person">
                <h5>Karel Decoene</h5>
                <p>CEO, Present Online</p>
            </div>
        </div>

        <div class="bullets">
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
        </div>
    </div> -->



    <!-- CONTACT -->
    <section class="contact">

        <!-- FORMSECTION -->
        <div class="contact__form-section">
            <h3>Geïnterreseerd?<br> Geef ons een seintje!</h3>

            <!-- Contactform -->
            <?php snippet('contact/form') ?>
        </div>
    </section>
</div>



<?php snippet("general/footer") ?>