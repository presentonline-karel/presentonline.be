<?php snippet("general/header") ?>



<!-- CONTACT CONTAINER -->
<div id="container" class="container container-contact">

    <!-- HEADER -->
    <header class="header header-contact">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER CONTACT - DESKTOP -->
        <div class="header__content header-contact__content desktop">
            <h4 class="header-cases__content__title desktop">Contact</h4>

            <div class="header-cases__content__text">
                <h1>Aarzel niet om ons te contacteren</h1>
                <a class="button button-primary"><i class="icon-first fa-solid fa-envelope"></i>Stuur een mailtje</a>
            </div>
        </div>

        <!-- HEADER CONTACT - MOBILE -->
        <div class="header__content header-contact__content mobile">
            <h1>Contacteer ons voor meer info</h1>
            <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

            <!-- Contact links -->
            <div class="header-contact__content__links">
                <a class="link p"><i class="icon-first fa-solid fa-phone"></i>0476280902</a>
                <a class="link p"><i class="icon-first fa-solid fa-envelope"></i>info@presentonline.be</a>
            </div>

            <!-- SNIPPET - SOCIALS -->
            <?php snippet('general/socials') ?>
        </div>
    </header>



    <!-- CONTACT -->
    <main class="contact">

        <?php /*
        <!-- INFO -->
        <div class="contact__info">
            <h2>Contact info</h2>
            <p>Het is al geruime tijd een bekend gegeven dat en lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

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
            <?php snippet('general/socials') ?>
        </div>
        */ ?>



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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.8731508933265!2d4.354607916301425!3d51.16612794341786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f3b4343150f5%3A0xf2313832a756271!2sPresent%20Online!5e0!3m2!1snl!2sbe!4v1664348117917!5m2!1snl!2sbe" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>



<?php snippet("general/footer") ?>