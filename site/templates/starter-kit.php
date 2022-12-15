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
            <?php if (isset($alert["error"])) : ?>
                <div class="alert error">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <p><?= $alert["error"] ?></p>
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
                        <?php foreach($page->headerButtons()->toStructure() as $button): ?>
                            <?php snippet("components/button", ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Header img -->
            <?php if ($headerImgWebp = $page->headerImgWebp()->toFile()) : ?>
                <?php if ($headerImgPng = $page->headerImgPng()->toFile()) : ?>
                    <a href="https://starter.presentonline.be" target="_blank">
                        <picture>
                            <source srcSet="<?= $headerImgWebp->url() ?>" type="image/webp" />
                            <source srcSet="<?= $headerImgPng->url() ?>" type="image/jpg" />
                            <img class="header-starter-kit__content__img" src="<?= $headerImgPng->url() ?>" alt="<?= $headerImgPng->alt() ?>" loading="lazy" />
                        </picture>
                    </a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>



    <main>

        <!-- INTRO -->
        <section id="intro" class="intro-section section fade-section">
            <div class="intro content-container-l content-container">

                <!-- Intro text -->
                <div class="intro__text">
                    <h2><?= $page->introTitle() ?></h2>
                    <p><?= $page->introParagraph() ?></p>

                    <!-- Header buttons -->
                    <?php if($page->introButtons()->isNotEmpty()): ?>
                        <?php foreach($page->introButtons()->toStructure() as $button): ?>
                            <?php snippet("components/button", ["button" => $button]) ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!-- Intro img -->
                <?php if ($introImgWebp = $page->introImgWebp()->toFile()) : ?>
                    <?php if ($introImgPng = $page->introImgPng()->toFile()) : ?>
                        <picture>
                            <source srcSet="<?= $introImgWebp->url() ?>" type="image/webp" />
                            <source srcSet="<?= $introImgPng->url() ?>" type="image/jpg" />
                            <img class="intro__img" src="<?= $introImgPng->url() ?>" alt="<?= $introImgPng->alt() ?>" loading="lazy" />
                        </picture>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </section>



        <!-- FEATURES -->
        <section id="features" class="features-section section fade-section">
            <h2><?= $page->featuresTitle() ?></h2>
            <p><?= $page->featuresParagraph() ?></p>

            <h3><?= $page->featuresSubtitle() ?></h3>

            <!-- Features -->
            <?php if ($page->features()->isNotEmpty()) : ?>
                <div class="features">
                    <?php foreach ($page->features()->toStructure() as $feature) : ?>
                        <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <a class="button button-primary" href="https://starter.presentonline.be" target="_blank">Preview<i class="anchor-first fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
        </section>



        <!-- INCLUDES -->
        <section id="includes" class="includes-section cards section section-large fade-section">
            <div class="includes content-container-l content-container">

                <!-- Included box - text -->
                <div class="includes__text includes__box">
                    <h2><?= $page->includesTitle() ?></h2>

                    <div class="desktop">
                        <p><?= $page->featuresParagraph() ?></p>

                        <h3><?= $page->featuresSubtitle() ?></h3>

                        <!-- Features -->
                        <?php if ($page->features()->isNotEmpty()) : ?>
                            <div class="features">
                                <?php foreach ($page->features()->toStructure() as $feature) : ?>
                                    <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>



                <!-- Includes features -->
                <?php if($page->includes()->isNotEmpty()): ?>
                    <?php foreach($page->includes()->toStructure() as $include): ?>
                        
                        <!-- Included box - feature -->
                        <div class="includes__feature includes__box card">
                            <div>
                                <div class="card__icon-container">

                                    <!-- icon -->
                                    <?php switch ($include->icon()) {
                                    case "keyboard":
                                        ?><i class="fa-solid fa-keyboard" aria-hidden="true"></i><?php
                                        break;
                                    case "magnifyingGlass":
                                        ?><i class="fa fa-search" aria-hidden="true"></i><?php
                                        break;
                                    case "camera":
                                        ?><i class="fa fa-camera" aria-hidden="true"></i><?php
                                        break;
                                    case "pencilRuler":
                                        ?><i class="fa fa-pencil" aria-hidden="true"></i><?php
                                        break;
                                    case "lightbulb":
                                        ?><i class="fa fa-lightbulb-o" aria-hidden="true"></i><?php
                                        break;
                                    case "pencil":
                                        ?><i class="fa-solid fa-pencil" aria-hidden="true"></i><?php
                                        break;
                                    case "thumbsUp":
                                        ?><i class="fa-solid fa-thumbs-up" aria-hidden="true"></i><?php
                                        break;
                                    default:
                                        ?><i class="fa fa-check" aria-hidden="true"></i><?php
                                    } ?>
                                </div>

                                <h3 class="card__title"><?= $include->title() ?></h3>
                                <p><?= $include->explanation() ?></p>

                                <!-- features -->
                                <?php if ($include->features()->isNotEmpty()) : ?>
                                    <div class="features">
                                        <?php foreach ($include->features()->toStructure() as $feature) : ?>
                                            <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>



                            <!-- include button -->
                            <?php if($include->includeButton()->isNotEmpty()): ?>
                                <?php foreach($include->includeButton()->toStructure() as $button): ?>
                                    <?php snippet("components/button", ["button" => $button]) ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>



                <!-- Included box - price -->
                <div class="includes__price includes__box">
                    <div class="includes__price__content">
                        <h3><?= $page->priceFrom() ?></h3>

                        <h2><?= $page->price() ?></h2>
                        <p><?= $page->priceDetails() ?></p>

                        <!-- include button -->
                        <?php if($page->priceButtons()->isNotEmpty()): ?>
                            <div class="buttons">
                                <?php foreach($page->priceButtons()->toStructure() as $button): ?>
                                    <?php snippet("components/button", ["button" => $button]) ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
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
                <div class="contact__info__container">
                    <h2 class="neutrals-100"><?= $page->intrestSectionTitle() ?></h2>
                    <p class="neutrals-100"><?= $page->intrestSectionParagraph() ?></p>

                    <div class="contact__info__items">
                        <a class="info-item p" href="tel:<?= $site->telephone() ?>"><i class="icon-first fa fa-phone" aria-hidden="true"></i><?= $site->telephone() ?></a>
                        <a class="info-item p" href="mailto:<?= $site->email() ?>"><i class="icon-first fa fa-envelope" aria-hidden="true"></i><?= $site->email() ?></a>
                    </div>

                    <!-- SNIPPET - SOCIALS -->
                    <?php snippet("general/socials", ["color" => "neutrals-100"]); ?>
                </div>
            </div>

            

            <!-- FORMSECTION -->
            <div class="contact__form-section">
                <h3><?= $page->intrestSectionTitle() ?></h3>

                <!-- Contactform -->
                <?php snippet("contact/form") ?>
            </div>
        </section>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js("build/js/home/testimonials-slider.js", ["defer" => true]) ?>
<?= js("build/js/contact/form-feedback.js", ["defer" => true]) ?>



<?php snippet("general/footer") ?>