<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">

    <?= css('assets/styles/css/main.min.css') ?>

</head>

<body>

    <header class="header <?= r($site->page('home')->isOpen(), 'header--transparent') ?>">

        <div class="container">

            <?php snippet('menu') ?>

        </div>

    </header>
