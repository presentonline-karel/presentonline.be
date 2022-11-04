<!-- CTA -->
<div id="cta" class="cta section section-medium fade-section" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/cta.png');">

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
                <a class="button button-white <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>