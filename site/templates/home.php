<?php snippet("general/header") ?>



<!-- HOME CONTAINER -->
<div id="container" class="container container-home">

    <!-- HEADER -->
    <header class="header header-home">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER HOME - CONTENT -->
        <div class="header-home__content">
            <!-- <h1>Uw partner voor websites|</h1> -->
            <h1><?= $site->introParagraph() ?></h1>
            <p>Suspendisse potenti. Curabitur vestibulum, velit in sagittis auctor, erat odio vulputate nisl, a tempor nulla arcu dapibus leo. Suspendisse justo orci, egestas eget facilisis id, semper a nibh.</p>

            <div class="buttons">
                <a class="button button-primary" href="#">What we do <i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
                <a class="button button-secondary" href="#">Starter Kit <i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>

            <div class="language">
                <i class="fa fa-globe" aria-hidden="true"></i> Switch language
            </div>
        </div>
    </header>

    <nav class="languages">
        <ul>
            <?php foreach ($kirby->languages() as $language) : ?>
                <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                    <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                        <?= html($language->name()) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </nav>
</div>



<?php snippet("general/footer") ?>