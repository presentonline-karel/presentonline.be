<?php snippet("general/header") ?>



<!-- HOME CONTAINER -->
<div id="container" class="container container-home">

    <!-- HEADER -->
    <header class="header header-home">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER HOME - CONTENT -->
        <div class="header__content header-home__content">
            <div class="header-home__content-container content-container-m content-container">
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
                        <?php foreach($page->heroButtons()->toStructure() as $button): ?>
                            <?php snippet("components/button", ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>



    <main>

        <!-- CLIENTS -->
        <section id="clients" class="clients-section section section-small">
            <div class="content-container-s content-container">
                <h3><?= $page->clientsTitle() ?></h3>

                <!-- Client items -->
                <?php if($page->clients()->isNotEmpty()): ?>
                    <div class="clients">

                        <!-- client -->
                        <?php foreach($page->clients()->toStructure() as $client): ?>

                            <!-- client with website -->
                            <?php if($client->url()->isNotEmpty()): ?>
                                <a class="client" href="<?= $client->url() ?>" target="_blank">

                                    <!-- client logo gray -->
                                    <img class="logo-grayscale" src="<?= $client->logoGray()->toFile()->url() ?>" alt="<?= $client->logoGray()->toFile()->alt() ?>" />

                                    <!-- client logo -->
                                    <?php if ($clientLogoWebp = $client->logoWebp()->toFile()) : ?>
                                        <?php if ($clientLogoPng = $client->logoPng()->toFile()) : ?>
                                            <picture>
                                                <source srcSet="<?= $clientLogoWebp->url() ?>" type="image/webp" />
                                                <source srcSet="<?= $clientLogoPng->url() ?>" type="image/jpg" />
                                                <img class="logo-color" src="<?= $clientLogoPng->url() ?>" alt="<?= $clientLogoPng->alt() ?>" />
                                            </picture>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </a>
                            
                            <!-- client no website -->
                            <?php else: ?>
                                <div class="client">

                                    <!-- client color -->
                                    <img class="logo-grayscale" src="<?= $client->logoGray()->toFile()->url() ?>" alt="<?= $client->logoGray()->toFile()->alt() ?>" />

                                    <!-- client logo -->
                                    <?php if ($clientLogoWebp = $client->logoWebp()->toFile()) : ?>
                                        <?php if ($clientLogoPng = $client->logoPng()->toFile()) : ?>
                                            <picture>
                                                <source srcSet="<?= $clientLogoWebp->url() ?>" type="image/webp" />
                                                <source srcSet="<?= $clientLogoPng->url() ?>" type="image/jpg" />
                                                <img class="logo-color" src="<?= $clientLogoPng->url() ?>" alt="<?= $clientLogoPng->alt() ?>" />
                                            </picture>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>



                <!-- Clients buttons -->
                <?php if($page->clientsButtons()->isNotEmpty()): ?>
                    <div class="buttons">
                        <?php foreach($page->clientsButtons()->toStructure() as $button): ?>
                            <?php snippet("components/button", ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
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
<?= js("build/js/home/testimonials-slider.js", ["defer" => true]) ?>
<?= js("build/js/home/typing-animation.js", ["defer" => true]) ?>



<?php snippet("general/footer") ?>