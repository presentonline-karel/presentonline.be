<?php snippet("general/header") ?>



<!-- THANK YOU CONTAINER -->
<div id="container" class="container container-thank-you">

    <!-- HEADER -->
    <header class="header header-thank-you">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- Header content -->
        <div class="header__content header-thank-you__content">
            <div class="header-thank-you__content__text">
                <p class="button button-tertiary large"><?= $page->headerSubtitle() ?></p>

                <h1 class="header__content__title"><?= $page->headerTitle() ?></h1>
                <p><?= $page->headerParagraph() ?></p>

                <!-- Header buttons -->
                <?php if($page->headerButtons()->isNotEmpty()): ?>
                    <?php foreach($page->headerButtons()->toStructure() as $button): ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>



            <!-- header img -->
            <?php if ($headerImgWebp = $page->headerImgWebp()->toFile()) : ?>
                <?php if ($headerImgPng = $page->headerImgPng()->toFile()) : ?>
                    <picture>
                        <source srcSet="<?= $headerImgWebp->url() ?>" type="image/webp" />
                        <source srcSet="<?= $headerImgPng->url() ?>" type="image/jpg" />
                        <img class="header-thank-you__content__img desktop" src="<?= $headerImgPng->url() ?>" alt="<?= $headerImgPng->alt() ?>" loading="lazy" />
                    </picture>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </header>
</div>



<?php snippet("general/footer") ?>