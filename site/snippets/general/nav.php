<nav id="nav" class="nav flex">
    <div class="content-container-l content-container">

        <!-- NAV LOGO -->
        <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
            <?php if ($site->logoLight()->isNotEmpty()) : ?>
                <img class="nav-links__top__logo" src="<?= $site->logoDark()->toFile()->url() ?>" alt="<?= $site->logoDark()->toFile()->alt() ?>" loading="lazy" />
            <?php endif; ?>
        </a>



        <!-- SLIDING NAV -->
        <div class="nav-links">

            <!-- Logo -->
            <?php if ($site->logoLight()->isNotEmpty()) : ?>
                <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
                    <img class="nav-links__top__logo mobile" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" loading="lazy" />
                </a>
            <?php endif; ?>

            <!-- Menu items -->
            <?php if ($site->navigationLinks()->isNotEmpty()) : ?>
                <ul class="link-items">

                    <!-- starter kit menu -->
                    <?php if($page->title() == "Starter Kit"): ?>
                        <?php foreach ($page->navigationLinks()->toStructure() as $link) : ?>
                            <li class="nav__link">
                                <a class="nav__link__item" href="<?= $link->page()->toPage()->url() . $link->section() ?>"><?= $link->anchor() ?> <?php if($link->notification() == "true") { ?> <div class="nav__link__item__notification"><span><?= $link->number() ?></span></div> <?php } ?> <div class="active-bullet"></div></a>
                            </li>
                        <?php endforeach; ?>

                        <!-- CTA -> Quotation -->
                        <li class="nav__link buttons">
                            <a class="button button-primary starter-kit-cta" href="<?= $site->url() ?>/starter-kit/#contact"><?php if($kirby->language()->code() == "nl") { ?>Gratis offerte<?php } elseif($kirby->language()->code() == "en") { ?>Free quotation<?php } ?><i class="anchor-first no-hover fa-solid fa-arrow-down"></i></a>
                            
                            <!-- Language selector -->
                            <?php foreach ($kirby->languages() as $language) : ?>
                                <a <?php e($kirby->language() == $language, ' class="language-button desktop active"') ?> class="language-button desktop" href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                                    <?= $kirby->language()->code() ?>
                                    <i class="anchor-first fa-solid fa-earth-americas"></i>
                                </a>
                            <?php endforeach ?>
                        </li>

                    <!-- default menu -->
                    <?php else: ?>
                        <?php foreach ($site->navigationLinks()->toStructure() as $link) : ?>
                            <li class="nav__link">
                                <a class="nav__link__item <?php if ($link->page()->toPage()->isOpen()) { echo ("active"); } ?>" href="<?= $link->page()->toPage()->url() . $link->section() ?>"><?= $link->anchor() ?> <?php if($link->notification() == "true") { ?> <div class="nav__link__item__notification"><span><?= $link->number() ?></span></div> <?php } ?> <div class="active-bullet"></div></a>
                            </li>
                        <?php endforeach; ?>

                        <!-- CTA -> Starter Kit -->
                        <li class="nav__link buttons">
                            <a class="button button-primary" href="<?= $site->url() ?>/starter-kit">Starter Kit<i class="anchor-first fa-solid fa-arrow-right"></i></a>

                            <!-- Language selector -->
                            <?php foreach ($kirby->languages() as $language) : ?>
                                <a <?php e($kirby->language() == $language, ' class="language-button desktop active"') ?> class="language-button desktop" href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                                    <?= $kirby->language()->code() ?>
                                    <i class="anchor-first fa-solid fa-earth-americas"></i>
                                </a>
                            <?php endforeach ?>
                        </li>
                    <?php endif; ?>
                </ul>
            <?php endif; ?>

            <!-- Socials + language -->
            <div class="bottom">

                <!-- socials -->
                <?php snippet("general/socials", ["color" => "neutrals-100"]) ?>

                <!-- Language selector -->
                <?php foreach ($kirby->languages() as $language) : ?>
                    <a <?php e($kirby->language() == $language, ' class="language active"') ?> class="language" href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
                        <i class="icon-first fa-solid fa-earth-americas"></i>    
                        <?= $kirby->language()->code() ?>
                    </a>
                <?php endforeach ?>
            </div>
        </div>



        <!-- Menu burger/cross -->
        <div class="burger">
            <div class="burger-line line1"></div>
            <div class="burger-line line2"></div>
            <div class="burger-line line3"></div>
        </div>
    </div>
</nav>