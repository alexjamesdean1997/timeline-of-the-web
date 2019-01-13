<?php // Fetch all categories ?>
<?php $categories = $page->children()->visible()->pluck('category', ',', true); ?>

<div class="filters__group mb-50">

    <span class="filters__label mb-20">
        Filter by category
    </span>

    <input type="radio"
           name="category-filter"
           value="all-categories"
           class="category-filter filter"
           id="all-categories">

    <label class="radio alt-text mb-10" for="all-categories">
        <span></span>
        All categories
    </label>

    <?php foreach ($categories as $category): ?>

        <input type="radio"
               name="category-filter"
               value="<?= html($category) ?>"
               class="category-filter filter"
               id="<?= html($category) ?>">

        <label class="radio alt-text mb-10" for="<?= html($category) ?>">
            <span></span>
            <?= html($category) ?>
        </label>

    <?php endforeach ?>

</div>