<?php snippet('header') ?>

<main class="main page-timeline">

    <aside class="sidebar">

        <div class="filters">

            <?php snippet('filter.categories') ?>

            <?php snippet('filter.tags') ?>

        </div>

    </aside>

    <div class="container container--offset">

        <section id="timeline">

            <div id="listing-events" class="listing-events">
                <?php snippet('event') ?>
            </div>

        </section>

    </div>

</main>

<?php snippet('footer') ?>



