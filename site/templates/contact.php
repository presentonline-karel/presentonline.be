<?php snippet("general/header") ?>



<!-- CONTACT CONTAINER -->
<div id="container" class="container container-contact">

    <!-- HEADER -->
    <header class="header header-contact">

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

        <!-- HEADER CONTACT - DESKTOP -->
        <div class="header__content header-contact__content desktop">
            <h4 class="header-contact__content__title">Contact</h4>

            <div class="header-contact__content__text">
                <h1 class="header__content__title">Aarzel niet om contact op te nemen</h1>
                <p>Suspendisse potenti. Curabitur vestibulum, velit in sagittis auctor, erat odio vulputate nisl, a tempor nulla arcu dapibus leo.</p>

                <a class="button button-primary">Get in touch</a>
            </div>
        </div>

        <!-- HEADER CONTACT - MOBILE -->
        <div class="header__content header-contact__content mobile">
            <h1 class="header__content__title">Contacteer ons voor meer info</h1>
            <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

            <!-- Contact links -->
            <div class="header-contact__content__links">
                <a class="link p block"><i class="icon-first primary-color-600 fa-solid fa-phone"></i>0476280902</a>
                <a class="link p block"><i class="icon-first primary-color-600 fa-solid fa-envelope"></i>info@presentonline.be</a>
            </div>

            <!-- SNIPPET - SOCIALS -->
            <?php snippet('general/socials', ['color' => 'primary-color-600']) ?>
        </div>
    </header>



    <!-- CONTACT -->
    <main class="contact">

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
            <h3>Of vul ons formulier in</h3>

            <!-- Contactform -->
            <?php snippet('contact/form') ?>
        </div>
    </main>



    <!-- MAPS -->
    <section class="maps">

        <!-- Maps widget -->
        <iframe class="maps__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.8731508933265!2d4.354607916301425!3d51.16612794341786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f3b4343150f5%3A0xf2313832a756271!2sPresent%20Online!5e0!3m2!1snl!2sbe!4v1664348117917!5m2!1snl!2sbe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/contact/form-feedback.js', ['defer' => true]) ?>

<?php if($page->floatingNavSwitch()->toBool() === true): ?>
    <?= js('build/js/general/nav-fade.js', ['defer' => true]) ?>
<?php endif; ?>



<?php snippet("general/footer") ?>