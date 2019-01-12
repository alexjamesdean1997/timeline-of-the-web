<nav>

    <ul class="menu">

        <li class="menu__item <?= r($site->page('home')->isOpen(), ' is-active') ?>">
            <a href="<?= $site->page('home')->url() ?>">
                <?= $site->page('home')->title() ?>
            </a>
        </li>

        <?php foreach ($pages->visible() as $item): ?>
            <li class="menu__item <?= r($item->isOpen(), ' is-active') ?>">
                <a href="<?= $item->url() ?>">
                    <?= $item->title()->html() ?>
                </a>
            </li>
        <?php endforeach ?>

    </ul>

</nav>