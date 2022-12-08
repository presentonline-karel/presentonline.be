        <footer class="footer section section-large fade-section">

            <!-- ARROW TOP -->
            <a class="top" href="#container" aria-label="Link to top of page">
                <i class="fa-solid fa-arrow-up"></i>
            </a>



            <div class="footer__blocks">

                <!-- INTRO -->
                <div class="intro footer__section">

                    <!-- Logo -->
                    <?php if ($site->logoLight()->isNotEmpty()) : ?>
                        <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
                            <img class="nav-links__top__logo" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" loading="lazy" />
                        </a>
                    <?php endif; ?>

                    <p><?= $site->introParagraph() ?></p>

                    <!-- Socials -->
                    <?php snippet("general/socials", ["color" => "neutrals-100"]) ?>
                </div>



                <!-- CONTACT -->
                <div class="contact footer__section">
                    <h3>Contact</h3>

                    <a class="footer__section__p" href="tel:<?= $site->telephone() ?>"><i class="icon-first fa fa-phone" aria-hidden="true"></i><?= $site->telephone() ?></a>
                    <a class="footer__section__p" href="mailto:<?= $site->email() ?>"><i class="icon-first fa fa-envelope" aria-hidden="true"></i><?= $site->email() ?></a>
                </div>



                <div class="flex">

                    <!-- SERVICES -->
                    <div class="services footer__section">
                        <h3><?= $site->servicesTitle() ?></h3>

                        <?php if($site->services()->isNotEmpty()): ?>
                            <?php foreach($site->services()->toStructure() as $service): ?>
                                <a class="footer__section__a" href="<?= $service->page()->toPage()->url() . $service->section() ?>"><?= $service->anchor() ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>



                    <!-- SITEMAP -->
                    <div class="sitemap footer__section">
                        <h3>Sitemap</h3>

                        <?php if($site->sitemap()->isNotEmpty()): ?>
                            <?php foreach($site->sitemap()->toStructure() as $sitemapPage): ?>
                                <a class="footer__section__a" href="<?= $sitemapPage->page()->toPage()->url() . $sitemapPage->section() ?>"><?= $sitemapPage->anchor() ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>



            <hr class="line footer-line">



            <p class="copyright"><?= $site->copyright() ?>  |  <?= $site->btwNr() ?></p>
        </footer>



        <!-- SCRIPTS -->
        <?= js("build/js/general/nav.js", ["defer" => true]) ?>
        <?= js("build/js/general/section-fade-animation.js", ["defer" => true]) ?>
        <?= js("build/js/general/cookies.js", ["defer" => true]) ?>

        <?php if ($page->floatingNavSwitch()->toBool() === true) : ?>
            <?= js("build/js/general/nav-fade.js", ["defer" => true]) ?>
        <?php endif; ?>
    </body>
</html>