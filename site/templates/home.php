<?php snippet('header') ?>

    <section>
      <h1 class="titre"><?= html($page->content()->get('heading')) ?></h1>
      <hr class="lignetitle" size="1" width="5%" color="#00C100" />
      <div class="txt-history">
        <div>
          <p>
          <?= $page->text()->kirbytext() ?>
          </p>
        </div>
        <div class="greybox"></div>
        <div><img src="images/history.png" /></div>
      </div>
      <div class="lientimeline">
        <hr class="lignelien" size="1" width="30%" color="black" />
        <a class="btn" href="<?= $site->page('timeline')->url() ?>">GO TO THE TIMELINE</a>
        <hr class="lignelien" size="1" width="30%" color="black" />
      </div>
    </section>

<?php snippet('footer') ?>