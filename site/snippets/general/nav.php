<nav class="nav nav-dark flex">

    <!-- NAV LOGO -->
    <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
        <?php if ($site->logoLight()->isNotEmpty()) : ?>
            <img class="nav-links__top__logo" src="<?= $site->logoDark()->toFile()->url() ?>" alt="<?= $site->logoDark()->toFile()->alt() ?>" />
        <?php endif; ?>
    </a>



    <!-- SLIDING NAV -->
    <div class="nav-links">

        <!-- Logo -->
        <?php if ($site->logoLight()->isNotEmpty()) : ?>
            <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
                <img class="nav-links__top__logo mobile" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" />
            </a>
        <?php endif; ?>

        <!-- Menu items -->
        <?php if ($site->navigationLinks()->isNotEmpty()) : ?>
            <ul class="link-items">
                <?php foreach ($site->navigationLinks()->toStructure() as $link) : ?>
                    <li class="nav__link">
                        <a class="nav__link__item <?php if ($link->page()->toPage()->isOpen()) { echo ("active"); } ?>" href="<?= $link->page()->toPage()->url() . $link->section() ?>"><?= $link->anchor() ?></a>
                    </li>
                <?php endforeach; ?>

                <!-- starter kit CTA -->
                <li class="nav__link">
                    <a class="button button-primary" href="<?= $site->url() ?>/starter-kit">Starter Kit<i class="anchor-first fa-solid fa-arrow-right"></i></a>
                </li>
            </ul>
        <?php endif; ?>

        <!-- Socials + language -->
        <div class="bottom">

            <!-- socials -->
            <?php snippet("general/socials", ['color' => 'neutrals-100']) ?>

            <!-- language -->
            <p class="language">
                <i class="icon-first fa fa-globe" aria-hidden="true"></i>ENG
            </p>
        </div>
    </div>



    <!-- Menu burger/cross -->
    <div class="burger">
        <div class="burger-line line1"></div>
        <div class="burger-line line2"></div>
        <div class="burger-line line3"></div>
    </div>
</nav>