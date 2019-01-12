<?php snippet('header') ?>

    <main class="main page-home">

        <div class="container">

            <h1>
                <?= $page->title()->html() ?>
            </h1>

            <div>
                <?= $page->text()->kirbytext() ?>
            </div>

        </div>

    </main>

<?php snippet('footer') ?>