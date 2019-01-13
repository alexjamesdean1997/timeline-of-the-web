<nav>

    <ul class="menu">

        <li>
            <a href="<?= $site->page('home')->url() ?>"
               class="menu__item <?= r($site->page('home')->isOpen(), ' menu__item--current') ?>">
                <?= $site->page('home')->title() ?>
            </a>
        </li>

        <?php foreach ($pages->visible() as $item): ?>
            <li>
                <a href="<?= $item->url() ?>"
                   class="menu__item <?= r($item->isOpen(), ' menu__item--current') ?>">
                    <?= $item->title()->html() ?>
                </a>
            </li>
        <?php endforeach ?>

    </ul>

</nav>