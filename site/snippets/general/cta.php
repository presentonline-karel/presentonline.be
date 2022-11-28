<!-- CTA -->
    <?php if($page->ctaImgWebp()->isNotEmpty() && $page->ctaImgPng()->isNotEmpty()): ?>
        <div id="cta" class="cta section section-medium fade-section" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?php if(strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) { echo($page->ctaImgWebp()->toFile()->url()); } else { echo($page->ctaImgPng()->toFile()->url()); } ?>')">
    <?php else: ?>
        <div id="cta" class="cta section section-medium fade-section" style="background-image: linear-gradient(90deg, rgba(25, 107, 222, 0.96) 18.23%, rgba(25, 107, 222, 0.48) 100%), url('<?= $site->url() ?>/../assets/img/presentonline-default-cta-bg.jpg')">
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
                <?php snippet("components/button", ["button" => $button]) ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>