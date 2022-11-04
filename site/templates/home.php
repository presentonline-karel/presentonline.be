<?php snippet("general/header") ?>



<!-- HOME CONTAINER -->
<div id="container" class="container container-home">

    <!-- HEADER -->
    <header class="header header-home">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER HOME - CONTENT -->
        <div class="header__content header-home__content">
            <h1 class="header__content__title header-home__content__title mobile"><?= $page->heroTitleMobile() ?></h1>
            <h1 class="typing mobile">Websites</h1>

            <!-- Typed words -->
            <?php if ($page->typedWords()->isNotEmpty()) : ?>
                <?php foreach ($page->typedWords()->toStructure() as $typedWord) : ?>
                    <div class="typedWord"><?= $typedWord->word() ?></div>
                <?php endforeach; ?>
            <?php endif; ?>

            <h1 class="header__content__title desktop"><?= $page->heroTitle() ?></h1>
            <p><?= $page->heroParagraph() ?></p>

            <!-- Hero buttons -->
            <?php if($page->heroButtons()->isNotEmpty()): ?>
                <div class="buttons">

                    <!-- button -->
                    <?php foreach($page->heroButtons()->toStructure() as $button): ?>
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </header>



    <main>

        <!-- CLIENTS -->
        <section id="clients" class="clients-section section section-small">
            <h3><?= $page->clientsTitle() ?></h3>

            <!-- Client items -->
            <?php if($page->clients()->isNotEmpty()): ?>
                <div class="clients">

                    <!-- client -->
                    <?php foreach($page->clients()->toStructure() as $client): ?>

                        <!-- client with website -->
                        <?php if($client->url()->isNotEmpty()): ?>
                            <a class="client" href="<?= $client->url() ?>" target="_blank">

                                <!-- client logo -->
                                <?php if ($clientLogoWebp = $client->logoWebp()->toFile()) : ?>
                                    <?php if ($clientLogoPng = $client->logoPng()->toFile()) : ?>
                                        <picture>
                                            <source srcSet="<?= $clientLogoWebp->url() ?>" type="image/webp" />
                                            <source srcSet="<?= $clientLogoPng->url() ?>" type="image/jpg" />
                                            <img src="<?= $clientLogoPng->url() ?>" alt="<?= $clientLogoPng->alt() ?>" />
                                        </picture>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </a>
                        
                        <!-- client no website -->
                        <?php else: ?>
                            <div class="client">

                                <!-- client logo -->
                                <?php if ($clientLogoWebp = $client->logoWebp()->toFile()) : ?>
                                    <?php if ($clientLogoPng = $client->logoPng()->toFile()) : ?>
                                        <picture>
                                            <source srcSet="<?= $clientLogoWebp->url() ?>" type="image/webp" />
                                            <source srcSet="<?= $clientLogoPng->url() ?>" type="image/jpg" />
                                            <img src="<?= $clientLogoPng->url() ?>" alt="<?= $clientLogoPng->alt() ?>" />
                                        </picture>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- CTA -> To cases -->
            <a class="button button-tertiary large" href="#">What we do for them<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
        </section>



        <!-- SERVICES -->
        <?php snippet("home/services"); ?>



        <!-- TESTIMONIALS -->
        <?php snippet("home/testimonials"); ?>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/home/testimonials-slider.js', ['defer' => true]) ?>
<?= js('build/js/home/typing-animation.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>