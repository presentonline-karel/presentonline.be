<?php snippet("general/header") ?>



<!-- WEBSITES & -APPS CONTAINER -->
<div id="container" class="container container-websites-apps">

    <!-- HEADER -->
    <header class="header header-service">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

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

                    <!-- button -->
                    <?php foreach($page->headerButton()->toStructure() as $button): ?>
                        <?php snippet('components/button', ["button" => $button]) ?>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- <a class="button button-tertiary large desktop">We offer 3 kits<i class="anchor-first fa-solid fa-arrow-down"></i></a> -->
            </div>

            <!-- Header img -->
            <?php if ($headerImgWebp = $page->headerImgWebp()->toFile()) : ?>
                <?php if ($headerImgPng = $page->headerImgPng()->toFile()) : ?>
                    <picture>
                        <source srcSet="<?= $headerImgWebp->url() ?>" type="image/webp" />
                        <source srcSet="<?= $headerImgPng->url() ?>" type="image/jpg" />
                        <img src="<?= $headerImgPng->url() ?>" alt="<?= $headerImgPng->alt() ?>" />
                    </picture>
                <?php endif; ?>
            <?php endif; ?>

            <?php /* <img class="header-service__content__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" alt="Carousel img" /> */ ?>
        </div>
    </header>



    <main>

        <!-- KITS -->
        <section id="service-features" class="service-features-section section section-large fade-section">
            <h2 class="service-features-section__title"><?= $page->stepsTitle() ?></h2>
            <p class="service-features-section__p"><?= $page->stepsParagraph() ?></p>

            <a class="button button-tertiary large mobile">3 kits<i class="anchor-first fa-solid fa-arrow-down"></i></a>



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

                                        <!-- feature -->
                                        <?php foreach($serviceFeature->features()->toStructure() as $feature): ?>
                                            <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>



                            <!-- Step button -->
                            <?php if($serviceFeature->stepButton()->isNotEmpty()): ?>

                                <!-- button -->
                                <?php foreach($serviceFeature->stepButton()->toStructure() as $button): ?>
                                    <?php snippet('components/button', ["button" => $button]) ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>



        <!-- PHOTOGRAPHY SECTIONS - NOT DONE -->
        <?php if($page->carousels()->isNotEmpty()): ?>
            <main id="photography-sections">

                <!-- PHOTOGRAPHY CAROUSEL -->
                <div class="photography-section section section-medium fade-section">
                    <h3 class="photography-section__title">GAGK Rupelstreek</h3>

                    <!-- slider -->
                    <div class="slider-container">
                        <div class="slider <?= $extraClassCases ?>">
                            <div class="slider__inner">
                                <div class="slide slide-img">
                                    <img class="slide__img" src="<?= $site->url() ?>/../assets/img/employee.webp" />
                                </div>
                                <div class="slide slide-img">
                                    <img class="slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                                </div>
                                <div class="slide slide-img">
                                    <img class="slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                                </div>
                                <div class="slide slide-img">
                                    <img class="slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                                </div>
                                <div class="slide slide-img">
                                    <img class="slide__img" src="<?= $site->url() ?>/../assets/img/karel_back.webp" />
                                </div>
                                <div class="slide slide-img">
                                    <img class="slide__img" src="<?= $site->url() ?>/../assets/img/employee.webp" />
                                </div>
                                <div class="slide slide-img">
                                    <img class="slide__img" src="<?= $site->url() ?>/../assets/img/karel_front.webp" />
                                </div>
                            </div>
                        </div>

                        <!-- arrows -->
                        <div class="slider__arrows">
                            <i class="slider-arrow arrow-left fa-solid fa-arrow-left"></i>
                            <i class="slider-arrow arrow-right fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                </div>

                <!-- PHOTOGRAPHY CAROUSEL -->
                <div class="photography-section section section-medium fade-section">
                    <h3 class="photography-section__title">KdG FabLab</h3>

                    <!-- slider -->
                    <?php snippet('general/slider', ['extraClassCases' => '']); ?>
                </div>

                <!-- PHOTOGRAPHY CAROUSEL -->
                <div class="photography-section section section-medium fade-section">
                    <h3 class="photography-section__title">Turnkring Energym</h3>

                    <!-- slider -->
                    <?php snippet('general/slider', ['extraClassCases' => '']); ?>
                </div>
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
                                <?php if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) : ?>
                                    <a class="slide slide-img case" href="<?= $case->url() ?>" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $case->challengeImgWebp()->toFile()->url() ?>');">
                                <?php else: ?>
                                    <a class="slide slide-img case" href="<?= $case->url() ?>" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $case->challengeImgPng()->toFile()->url() ?>');">
                                <?php endif; ?>

                                    <!-- case button -->
                                    <button class="button button-tertiary">READ CASE<i class="anchor-first fa-solid fa-arrow-right"></i></button>

                                    <!-- case text -->
                                    <div class="case__id">
                                        <h2 class="case__id__title"><?= $case->caseTitleShort() ?></h2>

                                        <!-- case tags -->
                                        <?php if ($case->caseTags()->isNotEmpty()) : ?>
                                            <div class="tags">

                                                <!-- tag -->
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



<?php snippet("general/footer") ?>