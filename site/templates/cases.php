<?php snippet("general/header") ?>



<!-- CASES CONTAINER -->
<div id="container" class="container container-cases">

    <!-- HEADER -->
    <header class="header header-cases">

        <!-- NAV -->
        <?php snippet("general/nav") ?>

        <!-- HEADER CASES - CONTENT -->
        <div class="header__content header-cases__content desktop">
            <h4 class="header-cases__content__title">Projecten</h4>

            <div class="header-cases__content__text">
                <h1>Enkele projecten waar we trots op zijn</h1>
            </div>
        </div>
    </header>



    <!-- CASES -->
    <main id="cases" class="cases section section-medium">

        <!-- Case -->
        <div class="case" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

            <!-- case button -->
            <a class="button button-tertiary" href="#">READ CASE<i class="anchor-first fa-solid fa-arrow-right"></i></a>

            <!-- case text -->
            <div class="case__id">
                <h2 class="case__id__title">Music2Move</h2>

                <div class="tags">
                    <span class="tag">Website</span>
                    <span class="tag">Photos</span>
                </div>
            </div>
        </div>

        <!-- Case -->
        <div class="case" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

            <!-- case button -->
            <a class="button button-tertiary" href="#">READ CASE<i class="anchor-first fa-solid fa-arrow-right"></i></a>

            <!-- case text -->
            <div class="case__id">
                <h2 class="case__id__title">GAGK</h2>

                <div class="tags">
                    <span class="tag">Website</span>
                    <span class="tag">Photos</span>
                </div>
            </div>
        </div>

        <!-- Case -->
        <div class="case" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

            <!-- case button -->
            <a class="button button-tertiary" href="#">READ CASE<i class="anchor-first fa-solid fa-arrow-right"></i></a>

            <!-- case text -->
            <div class="case__id">
                <h2 class="case__id__title">Karrel portfolio</h2>

                <div class="tags">
                    <span class="tag">Website</span>
                    <span class="tag">Photos</span>
                </div>
            </div>
        </div>

        <!-- Case -->
        <div class="case" style="background-image: linear-gradient(0deg, rgba(232, 240, 252, 0.8), rgba(232, 240, 252, 0.8)), url('<?= $site->url() ?>/../assets/img/cta.png');">

            <!-- case button -->
            <a class="button button-tertiary" href="#">READ CASE<i class="anchor-first fa-solid fa-arrow-right"></i></a>

            <!-- case text -->
            <div class="case__id">
                <h2 class="case__id__title">Bakery</h2>

                <div class="tags">
                    <span class="tag">Website</span>
                    <span class="tag">Photos</span>
                </div>
            </div>
        </div>
    </main>
</div>



<?php snippet("general/footer") ?>