<form id="contact-form" class="contact-form form" method="POST" action="<?= $page->url() ?>">
    <div class="contact-form__container">
        
        <!-- HONEYPOT -->
        <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="url" name="website" tabindex="-1">
        </div>


        <!-- INPUTS -->
        <div class="flex-desktop">

            <!-- name -->
            <div class="input-group">
                <label class="input-group__label"><?php if($kirby->language()->code() == "nl") { ?> Naam <?php } elseif($kirby->language()->code() == "en") { ?> Name <?php } ?></label>
                <input class="input contact-form__input name" type="text" name="name" placeholder="Naam" />

                <!--  form feedback -->
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <small>Error message</small>
            </div>

            <!-- email -->
            <div class="input-group">
                <label class="input-group__label">Email</label>
                <input class="input contact-form__input email" type="text" name="email" placeholder="Email" />

                <!--  form feedback -->
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <small>Error message</small>
            </div>
        </div>

        <!-- subject -->
        <div class="input-group">
            <label class="input-group__label"><?php if($kirby->language()->code() == "nl") { ?> Onderwerp <?php } elseif($kirby->language()->code() == "en") { ?> Subject <?php } ?></label>
            <input class="input contact-form__input subject" type="text" name="subject" placeholder="Onderwerp" />

            <!--  form feedback -->
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <small>Error message</small>
        </div>

        <!-- message -->
        <div class="input-group">
            <label class="input-group__label"><?php if($kirby->language()->code() == "nl") { ?> Boodschap <?php } elseif($kirby->language()->code() == "en") { ?> Message <?php } ?></label>
            <textarea class="input textarea contact-form__input message" type="text" name="message" placeholder="Boodschap"></textarea>

            <!--  form feedback -->
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <small>Error message</small>
        </div>

        <!-- Google Recaptcha -->
        <div class="g-recaptcha" data-sitekey="6Ldspn8jAAAAAIGikDiRJFGPfPkZtVZnrFjurXQn"></div>

        <button class="button button-primary" type="submit" name="submit" value="Verstuur"><?php if($kirby->language()->code() == "nl") { ?> Verstuur <?php } elseif($kirby->language()->code() == "en") { ?> Send <?php } ?> <i class="anchor-first no-hover fa fa-paper-plane" aria-hidden="true"></i></button>
    </div>
</form>