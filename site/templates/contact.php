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
            <?php if (isset($alert["error"])) : ?>
                <div class="alert error">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <p><?= $alert["error"] ?></p>
                </div>
            <?php endif ?>
        <?php endif; ?>



        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER CONTACT - DESKTOP -->
        <div class="header__content header-contact__content desktop">
            <h4 class="header-contact__content__title"><?= $page->headerSubtitle() ?></h4>

            <div class="header-contact__content__text">
                <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
                <p><?= $page->headerParagraph() ?></p>

                <!-- Header buttons -->
                <?php if($page->headerButtons()->isNotEmpty()): ?>
                    <?php foreach($page->headerButtons()->toStructure() as $button): ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- HEADER CONTACT - MOBILE -->
        <div class="header__content header-contact__content mobile">
            <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
            <p><?= $page->headerParagraph() ?></p>

            <!-- Contact links -->
            <div class="header-contact__content__links">
                <a class="link p block" href="tel:<?= $site->telephone() ?>"><i class="icon-first primary-color-600 fa-solid fa-phone"></i><?= $site->telephone() ?></a>
                <a class="link p block" href="mailto:<? $site->email() ?>"><i class="icon-first primary-color-600 fa-solid fa-envelope"></i><?= $site->email() ?></a>
            </div>

            <!-- SNIPPET - SOCIALS -->
            <?php snippet("general/socials", ["color" => "primary-color-600"]) ?>
        </div>
    </header>



    <!-- CONTACT -->
    <main id="contact" class="contact">

        <!-- INFO -->
        <div class="contact__info">
            <h2 class="neutrals-100"><?= $page->contactInfoTitle() ?></h2>
            <p class="neutrals-100"><?= $page->contactInfoParagraph() ?></p>

            <div class="contact__info__items">

                <!-- Telephone -->
                <a class="info-item p" href="tel:<?= $site->telephone() ?>"><i class="icon-first fa fa-phone" aria-hidden="true"></i><?= $site->telephone() ?></a>

                <!-- Email -->
                <a class="info-item p" href="mailto:<?= $site->email() ?>"><i class="icon-first fa fa-envelope" aria-hidden="true"></i><?= $site->email() ?></a>
            </div>

            <!-- SNIPPET - SOCIALS -->
            <?php snippet("general/socials", ["color" => "neutrals-100"]); ?>
        </div>



        <!-- FORMSECTION -->
        <div class="contact__form-section">
            <h3><?= $page->contactFormTitle() ?></h3>

            <!-- Contactform -->
            <?php snippet("contact/form") ?>
        </div>
    </main>



    <!-- MAPS -->
    <section class="maps">

        <!-- Maps widget -->
        <iframe class="maps__iframe" src="<?= $page->mapsSrcUrl() ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>



<!-- JS SCRIPTS -->
<?= js("build/js/contact/form-feedback.js", ["defer" => true]) ?>



<?php snippet("general/footer") ?>