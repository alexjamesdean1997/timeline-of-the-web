<?php snippet('header') ?>

    <section class="section-accueil">
      <h1 class="titre"><?= html($page->content()->get('heading')) ?></h1>
      <hr class="lignetitle" size="1" width="5%" color="#00C100" />
      <div class="txt-history">
        <div>
          <p>
          <?= $page->text()->kirbytext() ?>
          </p>
        </div>
        <div class="greybox"></div>
        <div><img class="img-history" src="./content/home/history.png" /></div>
      </div>
      <div class="lientimeline">
        <hr class="lignelien" size="0.5" width="30%" color="#555" />
        <a class="btn" href="<?= $site->page('timeline')->url() ?>">GO TO THE TIMELINE</a>
        <hr class="lignelien" size="0.5" width="30%" color="#555" />
      </div>
    </section>

<?php snippet('footer') ?>