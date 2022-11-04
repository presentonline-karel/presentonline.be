<section id="testimonials" class="testimonials-section section section-medium fade-section">

    <!-- Testimonials items -->
    <?php if ($page->testimonials()->isNotEmpty()) : ?>
        <div class="testimonials">

            <!-- testimonial -->
            <?php foreach ($page->testimonials()->toStructure() as $testimonial) : ?>
                <div class="slide-container testimonial">

                    <!-- arrow left -->
                    <i class="prev fa fa-arrow-left primary-color-600" aria-hidden="true"></i>

                    <div>
                        <!-- testimonial -->
                        <p class="testimonial__p"><?= $testimonial->testimonialText() ?></p>

                        <!-- person -->
                        <div class="testimonial__id flex">

                            <!-- reviewer logo/photo -->
                            <?php if ($reviewerImgWebp = $testimonial->reviewerPictureWebp()->toFile()) : ?>
                                <?php if ($reviewerImgPng = $testimonial->reviewerPicturePng()->toFile()) : ?>
                                    <picture>
                                        <source srcSet="<?= $reviewerImgWebp->url() ?>" type="image/webp" />
                                        <source srcSet="<?= $reviewerImgPng->url() ?>" type="image/jpg" />
                                        <img class="testimonial__id__picture" src="<?= $reviewerImgPng->url() ?>" alt="<?= $reviewerImgPng->alt() ?>" />
                                    </picture>
                                <?php endif; ?>
                            <?php endif; ?>

                            <div>
                                <h5 class="testimonial__id__name"><?= $testimonial->reviewerName() ?></h5>
                                <p class="testimonial__id__function"><?= $testimonial->reviewerFunction() ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- arrow right -->
                    <i class="next fa fa-arrow-right primary-color-600" aria-hidden="true"></i>
                </div>
            <?php endforeach; ?>
        </div>



        <!-- testimonials bullets -->
        <div class="bullets">
            <?php foreach ($page->testimonials()->toStructure() as $testimonial) : ?>
                <div class="bullet"></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>