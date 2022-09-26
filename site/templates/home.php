<?php snippet("general/header") ?>



<!-- HOME CONTAINER -->
<div id="container" class="container container-home">

    <!-- SWITCH LANGUAGES -> In modal steken -->
    <?php /* <nav class="languages">
        <ul>
            <?php foreach ($kirby->languages() as $language) : ?>
                <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                    <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                        <?= html($language->name()) ?>
                    </a>
                    </li>
                <?php endforeach ?>
        </ul>
    </nav> */ ?>



    <!-- HEADER -->
    <header class="header header-home">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER HOME - CONTENT -->
        <div class="header__content header-home__content">
            <h1>Uw partner voor <span>websites|</span></h1>
            <p>Suspendisse potenti. Curabitur vestibulum, velit in sagittis auctor, erat odio vulputate nisl, a tempor nulla arcu dapibus leo.</p>

            <div class="buttons">
                <a class="button button-primary" href="#">What we do<i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
                <a class="button button-secondary" href="#">Starter Kit<i class="anchor-first fa-solid fa-arrow-right"></i></a>
            </div>

            <p class="language">
                <i class="icon-first fa fa-globe" aria-hidden="true"></i>Switch language
            </p>
        </div>
    </header>



    <!-- CLIENTS -->
    <div class="clients section">
        <h3>Onze klanten</h3>

        <!-- Client items -->
        <div class="clients__items">
            <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client1.svg" alt="Client logo" /></a>
            <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client2.svg" alt="Client logo" /></a>
            <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client1.svg" alt="Client logo" /></a>
            <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client2.svg" alt="Client logo" /></a>
            <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client1.svg" alt="Client logo" /></a>
            <a class="client" href="#"><img class="client__img" src="<?= $site->url() ?>/../assets/img/Client2.svg" alt="Client logo" /></a>
        </div>

        <!-- CTA -> To cases -->
        <a class="button button-tertiary" href="#">What we do for them<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>



    <!-- SERVICES -->
    <div class="services section">
        <h2>Wat we doen?</h2>

        <!-- Services items -->
        <div class="services__items">

            <!-- service -->
            <div class="service">
                <div class="service__icon-container">
                    <i class="fa-solid fa-keyboard"></i>
                </div>

                <h3>Websites & webapps</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                <a class="button button-tertiary" href="#">Meer info <i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>

            <!-- service -->
            <div class="service">
                <div class="service__icon-container">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

                <h3>SEO</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                <a class="button button-tertiary" href="#">Meer info <i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>

            <!-- service -->
            <div class="service">
                <div class="service__icon-container">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                </div>

                <h3>Photography</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>

                <a class="button button-tertiary" href="#">Meer info <i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>

            <!-- service -->
            <div class="service">
                <div class="service__icon-container">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </div>

                <h3>Graphic design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
            </div>

            <!-- service -->
            <div class="service">
                <div class="service__icon-container">
                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </div>

                <h3>Concept & advice</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus efficitur fringilla imperdiet, sapien arcu feugiat orci.</p>
            </div>
        </div>

        <img class="services__img" src="<?= $site->url() ?>/../assets/img/services.png" alt="Services img" />
    </div>



    <!-- TESTIMONIALS
    <div class="testimonials section">
        <div class="testimonial__text">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>

            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium id nibh a molestie. Etiam vulputate, lectus.”</p>

            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </div>

        <div class="testimonial__id">
            <img class="testimonial__id__picture" src="<?php //$site->url() ?>/../assets/img/employee.webp" alt="Employee" />

            <div class="testimonial__id__person">
                <h5>Karel Decoene</h5>
                <p>CEO, Present Online</p>
            </div>
        </div>

        <div class="bullets">
            <div class="bullet"></div>
            <div class="bullet"></div>
            <div class="bullet"></div>
        </div>
    </div> -->



    <!-- CTA -->
    <div class="cta" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/cta.png');">
        <h3>Heb je bovenstaande services nodig?</h3>
        <a class="button button-white" href="#">Contacteer ons<i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>
</div>



<?php snippet("general/footer") ?>