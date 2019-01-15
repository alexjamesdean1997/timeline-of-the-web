<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">

<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />

    <?= css('assets/styles/css/accueil.css') ?>

</head>

<body>

<header>
    <nav>
      <hr class="lignenav" size="1" width="1.5%" color="white" />
      <span class="white">WEB </span> &nbsp <span class="green"> TIMELINE</span>
      <hr class="lignenav" size="1" width="1.5%" color="white" />
    </nav>
</header>