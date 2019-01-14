<?php // Fetch all tags ?>
<?php $tags = $page->children()->visible()->pluck('tags', ',', true); ?>

<div class="filters__group mb-50">

    <span class="filters__label mb-20">
        Filter by tag
    </span>

    <input type="radio"
           name="tag-filter"
           value="all-tags"
           class="tag-filter filter"
           id="all-tags"
           checked>

    <label class="radio alt-text mb-10" for="all-tags">
        <span></span>
        All tags
    </label>

    <?php foreach ($tags as $tag): ?>

        <input type="radio"
               name="tag-filter"
               value="<?= html($tag) ?>"
               class="tag-filter filter"
               id="<?= html($tag) ?>">

        <label class="radio alt-text mb-10" for="<?= html($tag) ?>">
            <span></span>
            #<?= html($tag) ?>
        </label>

    <?php endforeach ?>

</div>