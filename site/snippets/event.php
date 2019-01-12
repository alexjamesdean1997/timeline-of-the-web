<?php // Fetch all events ?>
<?php $events = $page->children()->visible()->sortby('date', 'asc'); ?>

<?php foreach ($events as $event): ?>

    <div class="event all-categories all-tags

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
                <div class="event__date">
                    <?php $year = $event->content()->get('date'); ?>
                    <?php $year = date('F Y', strtotime($year)); ?>
                    <?= html($year) ?>
                </div>
            <?php endif ?>

            <?php if ($image = $event->image()) : ?>
                <img class="event__img" src="<?= $image->url() ?>" alt="<?= $image->alt_text()->html() ?>"/>
            <?php endif ?>

            <div class="event__title">
                <h2>
                    <?= $event->title()->html() ?>
                </h2>
            </div>

            <?php if ($category = $event->content()->get('category')) : ?>
                <div class="event__category">
                    <?= html($category) ?>
                </div>
            <?php endif ?>

            <?php if ($tags = $event->content()->get('tags')->split(',')) : ?>
                <div class="event__tags">
                    <ul class="tags">
                        <?php foreach ($tags as $tag): ?>
                            <li>
                                #<?= html($tag) ?>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>

            <?php if ($content = $event->content()->get('content')) : ?>
                <div class="event__content">
                    <?= html($content) ?>
                </div>
            <?php endif ?>

        </div>

    </div>

<?php endforeach ?>