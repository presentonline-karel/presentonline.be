<?php snippet("general/header") ?>



<!-- CASES CONTAINER -->
<div id="container" class="container container-cases">

    <!-- HEADER -->
    <header class="header header-cases">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER CASES - CONTENT -->
        <div class="header__content header-cases__content desktop">
            <h4 class="header-cases__content__title"><?= $page->headerSubtitle() ?></h4>

            <div class="header-about__content__text">
                <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
                <p><?= $page->headerParagraph() ?></p>

                <!-- Hero buttons -->
                <?php if($page->headerButtons()->isNotEmpty()): ?>

                    <!-- button -->
                    <?php foreach($page->headerButtons()->toStructure() as $button): ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </header>


    <!-- CASES -->
    <?php if($page->children()->isNotEmpty()): ?>
        <main id="cases" class="cases section section-medium">
            <?php foreach ($page->children() as $project) : ?>

                <!-- Check if browerser supports webp -->
                <a class="case" href="<?= $project->url() ?>" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?php if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { echo($project->challengeImgWebp()->toFile()->url()); } else { echo($project->challengeImgPng()->toFile()->url()); } ?>');">

                    <!-- case button -->
                    <button class="button button-tertiary"><?php if($kirby->language()->code() == "nl") { ?> Meer lezen <?php } elseif($kirby->language()->code() == "en") { ?> Read case <?php } ?><i class="anchor-first fa-solid fa-arrow-right"></i></button>

                    <!-- case text -->
                    <div class="case__id">
                        <h2 class="case__id__title"><?= $project->caseTitleShort() ?></h2>

                        <!-- case tags -->
                        <?php if ($project->caseTags()->isNotEmpty()) : ?>
                            <div class="tags">

                                <!-- tag -->
                                <?php foreach ($project->caseTags()->split() as $tag) : ?>
                                    <span class="tag"><?= $tag ?></span>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </a>
            <?php endforeach; ?>
        </main>
    <?php endif; ?>
</div>



<?php snippet("general/footer") ?>