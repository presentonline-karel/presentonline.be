<?php snippet("general/header") ?>



<!-- STARTER KIT CONTAINER -->
<div id="container" class="container container-starter-kit">

    <!-- HEADER -->
    <header class="header header-starter-kit">

        <!-- ERROR/SUCCESS MESSAGE - CONTACT FORM -->
        <?php if ($success) : ?>
            <div class="alert success">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <p><?= $success ?></p>
            </div>
        <?php else : ?>
            <?php if (isset($alert['error'])) : ?>
                <div class="alert error">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <p><?= $alert['error'] ?></p>
                </div>
            <?php endif ?>
        <?php endif; ?>



        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER STARTER KIT - CONTENT -->
        <div class="header__content header-starter-kit__content">

            <div class="header__content__text header-starter-kit__content__text">
                <h1 class="header__content__title">Proffesionele website nodig voor een klein budget?</h1>
                <p>Suspendisse potenti. Curabitur vestibulum, velit in sagittis auctor, erat odio vulputate nisl, a tempor nulla arcu dapibus leo.</p>

                <div class="buttons">
                    <a class="button button-primary" href="#">Get it now<i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
                    <a class="button button-secondary" href="#">Preview<i class="anchor-first fa-solid fa-arrow-right"></i></a>
                </div>

                <!-- <p class="language"><i class="icon-first fa fa-globe" aria-hidden="true"></i>Switch language</p> -->
            </div>

            <img class="header-starter-kit__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="karrel" />
        </div>
    </header>



    <main>

        <!-- INTRO -->
        <section id="intro" class="intro section fade-section">

            <!-- Intro text -->
            <div class="intro__text">
                <h2>Present Online Starter Kit, gedaan met dat geknoei</h2>
                <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.<br><br> Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <a class="button button-tertiary large">Ontdek de Starter Kit<i class="anchor-first fa-solid fa-arrow-down"></i></a>
            </div>

            <!-- Intro img -->
            <img class="intro__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="karrel" />
        </section>



        <!-- FEATURES -->
        <section id="features" class="features-section section fade-section">
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
        <section id="includes" class="includes cards section section-large fade-section">

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
            <a class="includes__feature includes__box card">
                <div>
                    <div class="card__icon-container">
                        <i class="fa-solid fa-keyboard"></i>
                    </div>

                    <h3 class="card__title">Professionele website</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
                </div>

                <button class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></button>
            </a>

            <!-- Included box - feature -->
            <a class="includes__feature includes__box card">
                <div>
                    <div class="card__icon-container">
                        <i class="fa-solid fa-pencil"></i>
                    </div>

                    <h3 class="card__title">CMS panel</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
                </div>

                <button class="button button-tertiary" href="#">Preview<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></button>
            </a>

            <!-- Included box - feature -->
            <div class="includes__feature includes__box card">
                <div>
                    <div class="card__icon-container">
                        <i class="fa-solid fa-thumbs-up"></i>
                    </div>

                    <h3 class="card__title">Support</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
                </div>
            </div>

            <!-- Included box - feature -->
            <div class="includes__feature includes__box card">
                <div>
                    <div class="card__icon-container">
                        <i class="fa-solid fa-check"></i>
                    </div>

                    <h3 class="card__title">And much more</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie.</p>

                    <div class="features">
                        <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                        <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                        <span class="feature"><i class="icon-first fa-solid fa-check"></i>Feature comes here</span>
                    </div>
                </div>
            </div>

            <!-- Included box - price -->
            <div class="includes__price includes__box">
                <div class="includes__price__content">
                    <h3>Vanaf</h3>

                    <h2>€499</h2>

                    <div class="buttons">
                        <a class="button button-primary" href="#">Get it now</a>
                        <a class="button button-secondary" href="#">Preview<i class="anchor-first fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>



        <!-- TESTIMONIALS -->
        <?php snippet("home/testimonials"); ?>



        <!-- CONTACT -->
        <section id="contact" class="contact fade-section">

            <!-- INFO -->
            <div class="contact__info">
                <h2 class="neutrals-100">Contact info</h2>
                <p class="neutrals-100">Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <div class="contact__info__items">

                    <!-- Telephone -->
                    <a class="info-item p">
                        <i class="icon-first fa fa-phone" aria-hidden="true"></i>0476 28 09 02
                    </a>

                    <!-- Email -->
                    <a class="info-item p">
                        <i class="icon-first fa fa-envelope" aria-hidden="true"></i>info@presentonline.be
                    </a>
                </div>

                <!-- SNIPPET - SOCIALS -->
                <?php snippet('general/socials', ['color' => 'neutrals-100']); ?>
            </div>

            <!-- FORMSECTION -->
            <div class="contact__form-section">
                <h3>Geïnterreseerd?<br> Geef ons een seintje!</h3>

                <!-- Contactform -->
                <?php snippet('contact/form') ?>
            </div>
        </section>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/home/testimonials-slider.js', ['defer' => true]) ?>
<?= js('build/js/contact/form-feedback.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>