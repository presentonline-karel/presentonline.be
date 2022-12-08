<?php snippet("general/header") ?>



<!-- WEBSITES & -APPS CONTAINER -->
<div id="container" class="container container-websites-apps">

    <!-- HEADER -->
    <header class="header header-service">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- Header content -->
        <div class="header__content header-service__content">

            <!-- text -->
            <div class="header-service__content__text">

                <!-- breadcrumbs -->
                <div class="breadcrumbs">
                    <a class="breadcrumb" href="<?= $site->url() ?>/home/#services">Services</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a class="breadcrumb" href="#"><?= $page->title() ?></a>
                </div>

                <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
                <p><?= $page->headerParagraph() ?></p>

                <!-- Header button -->
                <?php if($page->headerButton()->isNotEmpty()): ?>
                    <?php foreach($page->headerButton()->toStructure() as $button): ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Header img -->
            <?php if ($headerImgWebp = $page->headerImgWebp()->toFile()) : ?>
                <?php if ($headerImgPng = $page->headerImgPng()->toFile()) : ?>
                    <picture>
                        <source srcSet="<?= $headerImgWebp->url() ?>" type="image/webp" />
                        <source srcSet="<?= $headerImgPng->url() ?>" type="image/jpg" />
                        <img class="header-service__content__img" src="<?= $headerImgPng->url() ?>" alt="<?= $headerImgPng->alt() ?>" loading="lazy" />
                    </picture>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>



    <main>

        <!-- KITS/STEPS -->
        <?php if($page->steps()->isNotEmpty()): ?>
            <section id="service-features" class="service-features-section section section-large fade-section">
                <h2 class="service-features-section__title"><?= $page->stepsTitle() ?></h2>
                <p class="service-features-section__p"><?= $page->stepsParagraph() ?></p>

                <!-- button -->
                <?php if($page->headerButton()->isNotEmpty()): ?>
                    <?php foreach($page->headerButton()->toStructure() as $button): ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                <?php endif; ?>



                <!-- Kits -->
                <?php if($page->steps()->isNotEmpty()): ?>
                    <div class="kits cards">

                        <!-- kit -->
                        <?php foreach($page->steps()->toStructure() as $serviceFeature): ?>
                            <div class="kit card">
                                <div>
                                    <div class="card__icon-container">
                                        <span><?= $serviceFeature->number() ?></span>
                                    </div>

                                    <h3 class="card__title"><?= $serviceFeature->title() ?></h3>
                                    <p><?= $serviceFeature->explanation() ?></p>

                                    <!-- Features -->
                                    <?php if($serviceFeature->features()->isNotEmpty()): ?>
                                        <div class="features">
                                            <?php foreach($serviceFeature->features()->toStructure() as $feature): ?>
                                                <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>



                                <!-- Step button -->
                                <?php if($serviceFeature->stepButton()->isNotEmpty()): ?>
                                    <?php foreach($serviceFeature->stepButton()->toStructure() as $button): ?>
                                        <?php snippet("components/button", ["button" => $button]) ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>



        <!-- PHOTOGRAPHY SECTIONS -->
        <?php if($page->carousels()->isNotEmpty()): ?>
            <main id="photography-sections">

                <!-- PHOTOGRAPHY CAROUSEL -->
                <?php foreach($page->carousels()->toStructure() as $carousel): ?>
                    <div class="photography-section section section-medium fade-section">
                        <h3 class="photography-section__title"><?= $carousel->carouselTitle() ?></h3>



                        <!-- slider -->
                        <div class="slider-container">
                            <div class="slider">
                                <div class="slider__inner" style="grid-template-columns: repeat(<?= count($carousel->carouselImagesPng()->toFiles()) ?>, 1fr);">

                                    <?php if(strpos( $_SERVER["HTTP_ACCEPT"], "image/webp" ) !== false ) : ?>

                                        <!-- slide -->
                                        <?php foreach($carousel->carouselImagesPng()->toFiles() as $imgPng): ?>
                                            <div class="slide slide-img">
                                                <img class="slide__img" src="<?= $imgPng->url() ?>" alt="<?= $imgPng->alt() ?>" loading="lazy" />
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>

                                        <!-- slide -->
                                        <?php foreach($carousel->carouselImagesWebp()->toFiles() as $imgWebp): ?>
                                            <div class="slide slide-img">
                                                <img class="slide__img" src="<?= $imgWebp->url() ?>" alt="<?= $imgWebp->alt() ?>" loading="lazy" />
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>



                            <!-- arrows -->
                            <div class="slider__arrows">
                                <i class="slider-arrow arrow-left fa-solid fa-arrow-left"></i>
                                <i class="slider-arrow arrow-right fa-solid fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </main>
        <?php endif; ?>



        <!-- CTA -->
        <?php snippet("general/cta"); ?>



        <!-- CASES CAROUSEL -->
        <?php if($page->cases()->isNotEmpty()): ?>
            <div id="cases" class="carousel-section section section-medium fade-section">
                <h2 class="carousel-section__title"><?= $page->casesTitle() ?></h2>

                <!-- slider -->
                <div class="slider-container">

                    <!-- casesSlider class -->
                    <div class="slider casesSlider">
                        <div class="slider__inner" style="grid-template-columns: repeat(<?= count($page->cases()->toPages()) ?>, 1fr);">
                            
                            <!-- case -->
                            <?php foreach($page->cases()->toPages() as $case): ?>
                                <a class="slide slide-img case" href="<?= $case->url() ?>" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?php if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { echo($case->challengeImgWebp()->toFile()->url()); } else { echo($case->challengeImgPng()->toFile()->url()); } ?>');">

                                    <!-- case button -->
                                    <button class="button button-tertiary"><?php if($kirby->language()->code() == "nl") { ?> Meer lezen <?php } elseif($kirby->language()->code() == "en") { ?> Read case <?php } ?><i class="anchor-first fa-solid fa-arrow-right"></i></button>

                                    <!-- case text -->
                                    <div class="case__id">
                                        <h2 class="case__id__title"><?= $case->caseTitleShort() ?></h2>

                                        <!-- case tags -->
                                        <?php if ($case->caseTags()->isNotEmpty()) : ?>
                                            <div class="tags">
                                                <?php foreach ($case->caseTags()->split() as $tag) : ?>
                                                    <span class="tag"><?= $tag ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- arrows -->
                    <div class="slider__arrows">
                        <i class="slider-arrow arrow-left fa-solid fa-arrow-left"></i>
                        <i class="slider-arrow arrow-right fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/general/slider.js', ['defer' => true]) ?>
<?= js('build/js/service/active-menu-item.js', ['defer' => true]) ?>



<?php snippet("general/footer") ?>