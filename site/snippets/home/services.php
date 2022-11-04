<section id="services" class="services-section section section-large fade-section">
    <h2><?= $page->servicesTitle() ?></h2>



    <!-- Services items -->
    <?php if ($page->services()->isNotEmpty()) : ?>
        <div class="services cards">

            <!-- service -->
            <?php foreach ($page->services()->toStructure() as $service) : ?>
                <div class="service card">
                    <div>
                        <div class="card__icon-container">

                            <!-- icon -->
                            <?php switch ($service->icon()) {
                            case "keyboard":
                                ?><i class="fa-solid fa-keyboard"></i><?php
                                break;
                            case "magnifyingGlass":
                                ?><i class="fa fa-search" aria-hidden="true"></i><?php
                                break;
                            case "camera":
                                ?><i class="fa fa-camera" aria-hidden="true"></i><?php
                                break;
                            case "pencilRuler":
                                ?><i class="fa fa-pencil" aria-hidden="true"></i><?php
                                break;
                            case "lightbulb":
                                ?><i class="fa fa-lightbulb-o" aria-hidden="true"></i><?php
                                break;
                            default:
                                ?><i class="fa fa-check" aria-hidden="true"></i><?php
                            } ?>
                        </div>

                        <h3 class="card__title"><?= $service->title() ?></h3>
                        <p class="card__p"><?= $service->explanation() ?></p>
                    </div>

                    <?php if ($service->destinationPage()->isNotEmpty()) : ?>
                        <a class="button button-tertiary" href="<?= $service->destinationPage()->toPage()->url() ?>">Meer info<i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>



    <!-- Services img -->
    <?php if ($servicesImgWebp = $page->servicesImgWebp()->toFile()) : ?>
        <?php if ($servicesImgPng = $page->servicesImgPng()->toFile()) : ?>
            <picture>
                <source srcSet="<?= $servicesImgWebp->url() ?>" type="image/webp" />
                <source srcSet="<?= $servicesImgPng->url() ?>" type="image/jpg" />
                <img class="services-section__img" src="<?= $servicesImgPng->url() ?>" alt="<?= $servicesImgPng->alt() ?>" />
            </picture>
        <?php endif; ?>
    <?php endif; ?>
</section>