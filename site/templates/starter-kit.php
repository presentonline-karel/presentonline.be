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
                <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
                <p><?= $page->headerParagraph() ?></p>

                <!-- Header buttons -->
                <?php if($page->headerButtons()->isNotEmpty()): ?>
                    <div class="buttons">

                        <!-- button -->
                        <?php foreach($page->headerButtons()->toStructure() as $button): ?>
                            <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?><?php if ($button->icon() == "chevronRight") { ?><i class="anchor-first fa fa-chevron-right"></i><?php } elseif ($button->icon() == "chevronDown") { ?><i class="anchor-first no-hover fa fa-chevron-down"></i> <?php } elseif ($button->icon() == "arrowRight") { ?><i class="anchor-first fa-solid fa-arrow-right"></i><?php } elseif ($button->icon() == "arrowRightTop") { ?><i class="anchor-first fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i><?php } elseif ($button->icon() == "arrowDown") { ?><i class="anchor-first no-hover fa-solid fa-arrow-down"></i><?php } ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Header img -->
            <?php if ($headerImgWebp = $page->headerImgWebp()->toFile()) : ?>
                <?php if ($headerImgPng = $page->headerImgPng()->toFile()) : ?>
                    <picture>
                        <source srcSet="<?= $headerImgWebp->url() ?>" type="image/webp" />
                        <source srcSet="<?= $headerImgPng->url() ?>" type="image/jpg" />
                        <img class="header-starter-kit__content__img" src="<?= $headerImgPng->url() ?>" alt="<?= $headerImgPng->alt() ?>" />
                    </picture>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>



    <main>

        <!-- INTRO -->
        <section id="intro" class="intro section fade-section">

            <!-- Intro text -->
            <div class="intro__text">
                <h2><?= $page->introTitle() ?></h2>
                <p><?= $page->introParagraph() ?></p>

                <!-- Header buttons -->
                <?php if($page->introButtons()->isNotEmpty()): ?>

                    <!-- button -->
                    <?php foreach($page->introButtons()->toStructure() as $button): ?>
                        <a class="button large <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?><?php if ($button->icon() == "chevronRight") { ?><i class="anchor-first fa fa-chevron-right"></i><?php } elseif ($button->icon() == "chevronDown") { ?><i class="anchor-first no-hover fa fa-chevron-down"></i> <?php } elseif ($button->icon() == "arrowRight") { ?><i class="anchor-first fa-solid fa-arrow-right"></i><?php } elseif ($button->icon() == "arrowRightTop") { ?><i class="anchor-first fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i><?php } elseif ($button->icon() == "arrowDown") { ?><i class="anchor-first no-hover fa-solid fa-arrow-down"></i><?php } ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Intro img -->
            <img class="intro__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="karrel" />
        </section>



        <!-- FEATURES -->
        <section id="features" class="features-section section fade-section">
            <h2><?= $page->featuresTitle() ?></h2>
            <p><?= $page->featuresParagraph() ?></p>

            <h3><?= $page->featuresSubtitle() ?></h3>

            <!-- Features -->
            <?php if ($page->features()->isNotEmpty()) : ?>
                <div class="features">

                    <!-- feature -->
                    <?php foreach ($page->features()->toStructure() as $feature) : ?>
                        <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <a class="button button-primary" href="https://starter.presentonline.be" target="_blank">Preview<i class="anchor-first fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
        </section>



        <!-- INCLUDES -->
        <section id="includes" class="includes cards section section-large fade-section">

            <!-- Included box - text -->
            <div class="includes__text includes__box">
                <h2><?= $page->featuresTitle() ?></h2>

                <div class="desktop">
                    <p><?= $page->featuresParagraph() ?></p>

                    <h3><?= $page->featuresSubtitle() ?></h3>

                    <!-- Features -->
                    <?php if ($page->features()->isNotEmpty()) : ?>
                        <div class="features">

                            <!-- feature -->
                            <?php foreach ($page->features()->toStructure() as $feature) : ?>
                                <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Includes here ->link on button not on card -->

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