<?php // Fetch all tags ?>
<?php $tags = $page->children()->visible()->pluck('tags', ',', true); ?>

<div class="filters__group">

    <span class="filters__label">
        Filter by tag
    </span>

    <label class="radio">
        <input type="radio"
               name="tag-filter"
               value="all-tags"
               class="tag-filter filter"
               id="all-tags">
        All tags
    </label>

    <?php foreach ($tags as $tag): ?>

        <label class="radio">
            <input type="radio"
                   name="tag-filter"
                   value="<?= html($tag) ?>"
                   class="tag-filter filter"
                   id="<?= html($tag) ?>">
            #<?= html($tag) ?>
        </label>

    <?php endforeach ?>

</div>