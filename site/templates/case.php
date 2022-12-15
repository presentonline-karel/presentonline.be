<?php snippet("general/header") ?>



<!-- CASE CONTAINER -->
<div id="container" class="container container-case">

    <!-- HEADER -->
    <header class="header header-case">
        <div class="header-case__content-container content-container-l content-container">

            <!-- NAV -->
            <?php snippet("general/nav") ?>

            <!-- HEADER CASE - CONTENT -->
            <div class="header__content header-case__content">

                <!-- Header text -->
                <div class="header-case__content__text">

                    <!-- CTA -->
                    <?php if($kirby->language()->code() == "nl") {
                        $casesPage = $pages->find("projecten");
                    } elseif($kirby->language()->code() == "en") {
                        $casesPage = $pages->find("cases");
                    } ?>

                    <!-- breadcrumbs -->
                    <div class="breadcrumbs">
                        <a class="breadcrumb" href="<?= $casesPage->url() ?>">Cases</a>
                        <i class="fa-solid fa-chevron-right"></i>
                        <a class="breadcrumb" href="#"><?= $page->caseTitleShort() ?></a>
                    </div>

                    <!-- tags -->
                    <?php if ($page->caseTags()->isNotEmpty()) : ?>
                        <div class="tags">
                            <?php foreach ($page->caseTags()->split() as $tag) : ?>
                                <span class="tag"><?= $tag ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="header__content__title"><?= $page->caseTitleLong() ?></h1>
                    <p><?= $page->caseParagraph() ?></p>

                    <!-- Live preview button -->
                    <?php if($page->caseUrl()->isNotEmpty()): ?>
                        <a class="button button-primary" href="<?= $page->caseUrl() ?>" target="_blank">Live preview<i class="anchor-first no-hover fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                    <?php endif; ?>
                </div>



                <!-- Header images -->
                <?php if($page->mockupsPng()->isNotEmpty() && $page->mockupsWebp()->isNotEmpty()): ?>
                    <div class="header-case__content__images slider-container">
                        <div class="slider">
                            <div class="slider__inner" style="grid-template-columns: repeat(<?= count($page->mockupsWebp()->toFiles()) ?>, 1fr);">
                                <?php if(strpos( $_SERVER["HTTP_ACCEPT"], "image/webp" ) !== false ) : ?>
                                    <?php foreach($page->mockupsWebp()->toFiles() as $image): ?>
                                        <div class="slide slide-img">
                                            <img class="slide__img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" />
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <?php foreach($page->mockupsPng()->toFiles() as $image): ?>
                                        <div class="slide slide-img">
                                            <img class="slide__img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" />
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
                <?php endif; ?>
            </div>
        </div>
    </header>



    <main>

        <!-- CHALLENGES -->
        <section id="challenges" class="challenges-section section fade-section">
            <div class="challenges content-container-l content-container">

                <!-- Challenge cover -->
                <?php if ($challengeImgWebp = $page->challengeImgWebp()->toFile()) : ?>
                    <?php if ($challengeImgPng = $page->challengeImgPng()->toFile()) : ?>
                        <picture>
                            <source srcSet="<?= $challengeImgWebp->url() ?>" type="image/webp" />
                            <source srcSet="<?= $challengeImgPng->url() ?>" type="image/jpg" />
                            <img class="challenges__img" src="<?= $challengeImgPng->url() ?>" alt="<?= $challengeImgPng->alt() ?>" loading="lazy" />
                        </picture>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="challenges__text">
                    <h2><?= $page->challengesTitle() ?></h2>
                    <p><?= $page->challengesParagraph() ?></p>

                    <h3><?= $page->outcomesTitle() ?></h3>

                    <!-- Outcomes -->
                    <?php if($page->outcomes()->isNotEmpty()): ?>
                        <div class="features">

                            <!-- outcome -->
                            <?php foreach($page->outcomes()->toStructure() as $outcome): ?>
                                <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $outcome->feature() ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Live preview button -->
                    <?php if($page->caseUrl()->isNotEmpty()): ?>
                        <a class="button button-primary" href="<?= $page->caseUrl() ?>" target="_blank">Live preview<i class="anchor-first no-hover fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </section>



        <!-- RELATED CASES -->
        <?php if($page->relatedCases()->isNotEmpty()): ?>
            <section id="next-case" class="next-case next-cases-section section section-medium fade-section">
                <div class="next-cases content-container-m content-container">
                    <h2 class="next-cases__title"><?= $page->relatedCasesTitle() ?></h2>

                    <div class="next-cases__cases">

                        <!-- Related case -->
                        <?php foreach($page->relatedCases()->toPages() as $relatedCase): ?>
                                <a class="case" href="<?= $relatedCase->url() ?>" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?php if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { echo($relatedCase->challengeImgWebp()->toFile()->url()); } else { echo($relatedCase->challengeImgPng()->toFile()->url()); } ?>');">

                                <!-- case button -->
                                <button class="button button-tertiary"><?php if($kirby->language()->code() == "nl") { ?> Meer lezen <?php } elseif($kirby->language()->code() == "en") { ?> Read case <?php } ?><i class="anchor-first fa-solid fa-arrow-right"></i></button>

                                <!-- case text -->
                                <div class="case__id">
                                    <h2 class="case__id__title"><?= $relatedCase->caseTitleShort() ?></h2>

                                    <!-- case tags -->
                                    <?php if ($relatedCase->caseTags()->isNotEmpty()) : ?>
                                        <div class="tags">
                                            <?php foreach ($relatedCase->caseTags()->split() as $tag) : ?>
                                                <span class="tag"><?= $tag ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>



        <!-- CTA -->
        <?php if($casesPage->isNotEmpty()): ?>
            <?php if($casesPage->ctaImgWebp()->isNotEmpty() && $casesPage->ctaImgPng()->isNotEmpty()): ?>
                <div id="cta" class="cta section section-medium fade-section" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?php if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { echo($casesPage->ctaImgWebp()->toFile()->url()); } else { echo($casesPage->ctaImgPng()->toFile()->url()); } ?>')">
            <?php else: ?>
                <div id="cta" class="cta section section-medium fade-section" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/presentonline-default-cta-bg.jpg')">
            <?php endif; ?>

                <div class="cta__content-container content-container-m content-container">

                    <!-- Title -->
                    <h3 class="cta__title"><?= $casesPage->ctaText() ?></h3>



                    <!-- Features -->
                    <?php if ($casesPage->ctaFeatures()->isNotEmpty()) : ?>
                        <div class="features">
                            <?php foreach ($casesPage->ctaFeatures()->toStructure() as $feature) : ?>
                                <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>



                    <!-- Cta buttons -->
                    <?php if($casesPage->ctaButtons()->isNotEmpty()): ?>
                        <div class="buttons">
                            <?php foreach($casesPage->ctaButtons()->toStructure() as $button): ?>
                                <?php snippet("components/button", ["button" => $button]) ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js("build/js/general/slider.js", ["defer" => true]) ?>



<?php snippet("general/footer") ?>