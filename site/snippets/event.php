<?php // Fetch all events ?>
<?php $events = $page->children()->visible()->sortby('date', 'asc'); ?>

<?php foreach ($events as $event): ?>

    <div class="event all-categories all-tags mb-50

        <?php if ($tags = $event->content()->get('tags')->split(',')) : ?>

            <?php foreach ($tags as $tag): ?>

                <?= html($tag) ?>

            <?php endforeach ?>

        <?php endif ?>

        <?php if ($category = $event->content()->get('category')) : ?>

            <?= html($category) ?>

        <?php endif ?>

        ">

        <div class="event-body">

            <?php if ($date = $event->content()->get('date')) : ?>
                <div class="event__date mb-20">
                    <?php $year = $event->content()->get('date'); ?>
                    <?php $year = date('F Y', strtotime($year)); ?>
                    <h3>
                        <?= html($year) ?>
                    </h3>
                </div>
            <?php endif ?>

            <?php if ($image = $event->image()) : ?>
                <img class="event__img mb-30" src="<?= $image->url() ?>" alt="<?= $image->alt_text()->html() ?>"/>
            <?php endif ?>

            <div class="event__title mb-10">
                <h2>
                    <?= $event->title()->html() ?>
                </h2>
            </div>

            <?php if ($category = $event->content()->get('category')) : ?>
                <div class="event__category alt-text mb-5">
                    <?= html($category) ?>
                </div>
            <?php endif ?>

            <?php if ($tags = $event->content()->get('tags')->split(',')) : ?>
                <div class="event__tags alt-text mb-30">
                    <ul class="tags">
                        <?php foreach ($tags as $tag): ?>
                            <li class="tags__item">
                                #<?= html($tag) ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <?php if ($content = $event->content()->get('content')) : ?>
                <div class="event__content text mb-30">
                    <?= html($content) ?>
                </div>
            <?php endif ?>

            <?php if ($link = $event->content()->get('url')) : ?>
                <a class="event__link button"
                   href="<?= html($link) ?>"
                   target="_blank">
                    View more 👉
                </a>
            <?php endif ?>

        </div>

    </div>

<?php endforeach ?>