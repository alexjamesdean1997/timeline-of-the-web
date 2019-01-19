<?php // Fetch all categories ?>
<?php $categories = $page->children()->visible()->pluck('category', ',', true); ?>

<div class="filters__group mb-50">

    <section class="category">
    <h2 class="headtag">FILTER BY <strong>CATEGORY</strong></h2>

        <div class="boxtag">

            <div>

                <input type="radio"
                    name="category-filter"
                    value="all-categories"
                    class="category-filter filter"
                    id="all-categories"
                    checked>

                <label class="radio alt-text mb-10" for="all-categories">
                    <span></span>
                    All categories
                </label>

            </div>

        

            <?php foreach ($categories as $category): ?>

                <div>
                    <input type="radio"
                        name="category-filter"
                        value="<?= html($category) ?>"
                        class="category-filter filter"
                        id="<?= html($category) ?>">

                    <label class="radio alt-text mb-10" for="<?= html($category) ?>">
                        <span></span>
                        <?= html($category) ?>
                    </label>
                </div> 

            <?php endforeach ?>

        </div>

    </div>
    </section>

    