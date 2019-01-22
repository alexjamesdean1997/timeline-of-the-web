<?php snippet('header') ?>

<main class="main page-timeline">

    <aside class="sidebar">

        <div class="filters">

            <?php snippet('filter.categories') ?>

            <?php snippet('filter.tags') ?>

        </div>

    </aside>

    <div class="container container--offset">

        <section class="cd-horizontal-timeline" id="timeline">

            <div class="timeline">
                <div class="events-wrapper">
                    <div class="events">
                        <ol>
                            <li><a href="#0" data-date="16/01/2014" class="selected">16 Jan</a></li>
                            <li><a href="#0" data-date="28/02/2014">28 Feb</a></li>
                        </ol>
                        <span class="filling-line" aria-hidden="true"></span>
                    </div> <!-- .events -->
                </div> <!-- .events-wrapper -->







            <div id="listing-events" class="listing-events">
                <?php snippet('event') ?>
            </div>

        </section>

    </div>

</main>

<?php snippet('footer') ?>



