<div class="contact__info__container">
    <h2 class="neutrals-100"><?= $page->contactInfoTitle() ?></h2>
    <p class="neutrals-100"><?= $page->contactInfoParagraph() ?></p>

    <div class="contact__info__items">

        <!-- Telephone -->
        <a class="info-item p" href="tel:<?= $site->telephone() ?>"><i class="icon-first fa fa-phone" aria-hidden="true"></i><?= $site->telephone() ?></a>

        <!-- Email -->
        <a class="info-item p" href="mailto:<?= $site->email() ?>"><i class="icon-first fa fa-envelope" aria-hidden="true"></i><?= $site->email() ?></a>
    </div>

    <!-- SNIPPET - SOCIALS -->
    <?php snippet("general/socials", ["color" => "neutrals-100"]); ?>
</div>