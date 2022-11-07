<?php snippet("general/header") ?>



<!-- ABOUT CONTAINER -->
<div id="container" class="container container-about">

    <!-- HEADER -->
    <header class="header header-about">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER ABOUT - CONTENT -->
        <div class="header__content header-about__content">
            <h4 class="header-about__content__title desktop"><?= $page->headerSubtitle() ?></h4>

            <div class="header-about__content__text">
                <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
                <p><?= $page->headerParagraph() ?></p>

                <!-- Header buttons -->
                <?php if($page->headerButtons()->isNotEmpty()): ?>

                    <!-- button -->
                    <?php foreach($page->headerButtons()->toStructure() as $button): ?>
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?><?php if ($button->icon() == "chevronRight") { ?><i class="anchor-first fa fa-chevron-right"></i><?php } elseif ($button->icon() == "chevronDown") { ?><i class="anchor-first no-hover fa fa-chevron-down"></i> <?php } elseif ($button->icon() == "arrowRight") { ?><i class="anchor-first fa-solid fa-arrow-right"></i><?php } elseif ($button->icon() == "arrowRightTop") { ?><i class="anchor-first no-hover fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i><?php } elseif ($button->icon() == "arrowDown") { ?><i class="anchor-first no-hover fa-solid fa-arrow-down"></i><?php } ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </header>



    <main>

        <!-- ABOUT -->
        <section id="about" class="about section section-medium flex">

            <!-- ABOUT TEXT -->
            <div class="about__text">
                <div class="about__text__title flex">
                    <h2><?= $page->aboutTitle() ?></h2>
                    <img src="<?= $site->url() ?>/../assets/img/hand.svg" alt="Waving hand" />
                </div>

                <!-- ABOUT PHOTOS - MOBILE -->
                <div class="about__text__photos mobile flex">

                    <!-- about img -->
                    <?php if ($aboutImgFirstWebp = $page->aboutImgFirstWebp()->toFile()) : ?>
                        <?php if ($aboutImgFirstPng = $page->aboutImgFirstPng()->toFile()) : ?>
                            <picture>
                                <source srcSet="<?= $aboutImgFirstWebp->url() ?>" type="image/webp" />
                                <source srcSet="<?= $aboutImgFirstPng->url() ?>" type="image/jpg" />
                                <img src="<?= $aboutImgFirstPng->url() ?>" alt="<?= $aboutImgFirstPng->alt() ?>" />
                            </picture>
                        <?php endif; ?>
                    <?php endif; ?>

                    <!-- about img -->
                    <?php if ($aboutImgSecondWebp = $page->aboutImgSecondWebp()->toFile()) : ?>
                        <?php if ($aboutImgSecondPng = $page->aboutImgSecondPng()->toFile()) : ?>
                            <picture>
                                <source srcSet="<?= $aboutImgSecondWebp->url() ?>" type="image/webp" />
                                <source srcSet="<?= $aboutImgSecondPng->url() ?>" type="image/jpg" />
                                <img src="<?= $aboutImgSecondPng->url() ?>" alt="<?= $aboutImgSecondPng->alt() ?>" />
                            </picture>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <p class="about__text__p"><?= $page->aboutParagraph() ?></p>

                <!-- About numbers -->
                <div class="about__text__numbers">

                    <!-- number -->
                    <?php foreach($page->aboutNumbers()->toStructure() as $aboutNumber): ?>
                        <div class="number-container">
                            <div class="number counter <?php if($aboutNumber->withPlus() == "true") { echo("plus"); } ?>" data-target="<?= $aboutNumber->number() ?>"><?= $aboutNumber->number() ?></div>
                            <div class="label"><?= $aboutNumber->title() ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- ABOUT PHOTOS - DESKTOP -->
            <div class="about__photos desktop">

                <!-- about img -->
                <?php if ($aboutImgFirstWebp = $page->aboutImgFirstWebp()->toFile()) : ?>
                    <?php if ($aboutImgFirstPng = $page->aboutImgFirstPng()->toFile()) : ?>
                        <picture>
                            <source srcSet="<?= $aboutImgFirstWebp->url() ?>" type="image/webp" />
                            <source srcSet="<?= $aboutImgFirstPng->url() ?>" type="image/jpg" />
                            <img src="<?= $aboutImgFirstPng->url() ?>" alt="<?= $aboutImgFirstPng->alt() ?>" />
                        </picture>
                    <?php endif; ?>
                <?php endif; ?>

                <!-- about img -->
                <?php if ($aboutImgSecondWebp = $page->aboutImgSecondWebp()->toFile()) : ?>
                    <?php if ($aboutImgSecondPng = $page->aboutImgSecondPng()->toFile()) : ?>
                        <picture>
                            <source srcSet="<?= $aboutImgSecondWebp->url() ?>" type="image/webp" />
                            <source srcSet="<?= $aboutImgSecondPng->url() ?>" type="image/jpg" />
                            <img src="<?= $aboutImgSecondPng->url() ?>" alt="<?= $aboutImgSecondPng->alt() ?>" />
                        </picture>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </section>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/about/counter-animation.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>