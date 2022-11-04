        <footer class="footer section section-large fade-section">

            <!-- ARROW TOP -->
            <a class="top" href="#container">
                <i class="fa-solid fa-arrow-up"></i>
            </a>



            <div class="footer__blocks">

                <!-- INTRO -->
                <div class="intro footer__section">

                    <!-- Logo -->
                    <?php if ($site->logoLight()->isNotEmpty()) : ?>
                        <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
                            <img class="nav-links__top__logo" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" />
                        </a>
                    <?php endif; ?>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie.</p>

                    <!-- Socials -->
                    <?php snippet("general/socials", ['color' => 'neutrals-100']) ?>
                </div>



                <!-- CONTACT -->
                <div class="contact footer__section">
                    <h3>Contact</h3>

                    <p class="footer__section__p"><i class="icon-first fa fa-phone" aria-hidden="true"></i>0476 28 09 02</p>
                    <p class="footer__section__p"><i class="icon-first fa fa-envelope" aria-hidden="true"></i>info@presentonline.be</p>
                </div>



                <div class="flex">

                    <!-- SERVICES -->
                    <div class="services footer__section">
                        <h3>Diensten</h3>

                        <a class="footer__section__a" href="#">Websites &-apps</a>
                        <a class="footer__section__a" href="#">SEO</a>
                        <a class="footer__section__a" href="#">Photography</a>
                        <a class="footer__section__a" href="#">Graphic design</a>
                        <a class="footer__section__a" href="#">Concept & advice</a>
                    </div>

                    <!-- SITEMAP -->
                    <div class="sitemap footer__section">
                        <h3>Sitemap</h3>

                        <a class="footer__section__a" href="#">Home</a>
                        <a class="footer__section__a" href="#">Diensten</a>
                        <a class="footer__section__a" href="#">Over ons</a>
                        <a class="footer__section__a" href="#">Projecten</a>
                        <a class="footer__section__a" href="#">Contact</a>
                        <a class="footer__section__a" href="#">Starter Kit<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>



            <hr class="line footer-line">

            <p class="copyright">©PresentOnline. All rights reserved. |  BTW BE 0772.635.880</p>
        </footer>



        <!-- MOBILE NAV SCRIPT -->
        <?= js('build/js/general/nav.js', ['defer' => true]) ?>
        <?= js('build/js/general/section-fade-animation.js', ['defer' => true]) ?>

        <?php if ($page->floatingNavSwitch()->toBool() === true) : ?>
            <?= js('build/js/general/nav-fade.js', ['defer' => true]) ?>
        <?php endif; ?>
    </body>
</html>