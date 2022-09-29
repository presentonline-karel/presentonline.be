<?php if ($site->socials()->isNotEmpty()) : ?>
    <div class="socials">
        <?php foreach ($site->socials()->toStructure() as $social) : ?>
            <?php if ($social->social() == "facebook") : ?>
                <a class="social" href="<?= $social->url() ?>" target="_blank" aria-label="Facebook"><i class="<?= $color ?> fa fa-facebook" aria-hidden="true"></i></a>
            <?php elseif ($social->social() == "instagram") : ?>
                <a class="social" href="<?= $social->url() ?>" target="_blank" aria-label="Instagram"><i class="<?= $color ?> fa fa-instagram" aria-hidden="true"></i></a>
            <?php elseif ($social->social() == "linkedin") : ?>
                <a class="social" href="<?= $social->url() ?>" target="_blank" aria-label="LinkedIn"><i class="<?= $color ?> fa fa-linkedin" aria-hidden="true"></i></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>