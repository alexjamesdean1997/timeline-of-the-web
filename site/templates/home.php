<?php snippet('header') ?>

    <main class="main page-home">

        <div class="container">

            <h1 class="mb-20">
                <?= html($page->content()->get('heading')) ?>
            </h1>

            <div class="mb-30">
                <?= $page->text()->kirbytext() ?>
            </div>

            <a href="<?= $site->page('timeline')->url() ?>"
               class="button">
                View now 👉
            </a>

        </div>

    </main>

<?php snippet('footer') ?>