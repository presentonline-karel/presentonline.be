<!-- CTA -->
    <?php if($page->ctaImgWebp()->isNotEmpty() && $page->ctaImgPng()->isNotEmpty()): ?>
        <div id="cta" class="cta section section-medium fade-section" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?php if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { echo($page->ctaImgWebp()->toFile()->url()); } else { echo($page->ctaImgPng()->toFile()->url()); } ?>')">
    <?php else: ?>
        <div id="cta" class="cta section section-medium fade-section" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/cta.png')">
    <?php endif; ?>

    <!-- Title -->
    <h3 class="cta__title"><?= $page->ctaText() ?></h3>



    <!-- Features -->
    <?php if ($page->ctaFeatures()->isNotEmpty()) : ?>
        <div class="features">

            <!-- feature -->
            <?php foreach ($page->ctaFeatures()->toStructure() as $feature) : ?>
                <span class="feature"><i class="icon-first fa-solid fa-check"></i><?= $feature->feature() ?></span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>



    <!-- Cta buttons -->
    <?php if($page->ctaButtons()->isNotEmpty()): ?>
        <div class="buttons">

            <!-- button -->
            <?php foreach($page->ctaButtons()->toStructure() as $button): ?>
                <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?><?php if ($button->icon() == "chevronRight") { ?><i class="anchor-first fa fa-chevron-right"></i><?php } elseif ($button->icon() == "chevronDown") { ?><i class="anchor-first no-hover fa fa-chevron-down"></i> <?php } elseif ($button->icon() == "arrowRight") { ?><i class="anchor-first fa-solid fa-arrow-right"></i><?php } elseif ($button->icon() == "arrowRightTop") { ?><i class="anchor-first fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i><?php } elseif ($button->icon() == "arrowDown") { ?><i class="anchor-first no-hover fa-solid fa-arrow-down"></i><?php } ?></a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>