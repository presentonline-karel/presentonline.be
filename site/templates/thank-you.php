<?php snippet("general/header") ?>



<!-- THANK YOU CONTAINER -->
<div id="container" class="container container-thank-you">

    <!-- HEADER -->
    <header class="header header-thank-you">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- Header content -->
        <div class="header__content header-thank-you__content">
            <div class="header-thank-you__content__text">
                <p class="button button-tertiary large"><?= $page->headerSubtitle() ?></p>

                <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
                <p><?= $page->headerParagraph() ?></p>

                <h3><?= $page->redirectTitle() ?></h3>

                <!-- Header buttons -->
                <?php if($page->headerButtons()->isNotEmpty()): ?>

                    <!-- button -->
                    <?php foreach($page->headerButtons()->toStructure() as $button): ?>
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?><?php if ($button->icon() == "chevronRight") { ?><i class="anchor-first fa fa-chevron-right"></i><?php } elseif ($button->icon() == "chevronDown") { ?><i class="anchor-first no-hover fa fa-chevron-down"></i> <?php } elseif ($button->icon() == "arrowRight") { ?><i class="anchor-first fa-solid fa-arrow-right"></i><?php } elseif ($button->icon() == "arrowRightTop") { ?><i class="anchor-first no-hover fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i><?php } elseif ($button->icon() == "arrowDown") { ?><i class="anchor-first no-hover fa-solid fa-arrow-down"></i><?php } ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>



            <!-- about img -->
            <?php if ($headerImgWebp = $page->headerImgWebp()->toFile()) : ?>
                <?php if ($headerImgPng = $page->headerImgPng()->toFile()) : ?>
                    <picture>
                        <source srcSet="<?= $headerImgWebp->url() ?>" type="image/webp" />
                        <source srcSet="<?= $headerImgPng->url() ?>" type="image/jpg" />
                        <img class="header-thank-you__content__img desktop" src="<?= $headerImgPng->url() ?>" alt="<?= $headerImgPng->alt() ?>" />
                    </picture>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>
</div>



<?php snippet("general/footer") ?>