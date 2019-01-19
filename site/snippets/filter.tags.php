<?php // Fetch all tags ?>
<?php $tags = $page->children()->visible()->pluck('tags', ',', true); ?>

<div class="filters__group mb-50">
<section class="tag">
    <h2 class="headtag">NARROW DOWN YOUR <strong>SEARCH</strong></h2>
    <p>Choose a <strong>tag </strong> you're interested in</p>

    <div class="boxtag">

        <div>

            <input type="radio"
                name="tag-filter"
                value="all-tags"
                class="tag-filter filter"
                id="all-tags"
                checked>

        <label class="radio alt-text mb-10" for="all-tags">
            <span>All tags</span>
                
        </label>

        </div>
        

        <?php foreach ($tags as $tag): ?>


        <div>
            <input type="radio"
                    name="tag-filter"
                    value="<?= html($tag) ?>"
                    class="tag-filter filter"
                    id="<?= html($tag) ?>">

                <label class="radio alt-text mb-10" for="<?= html($tag) ?>">
                    <span>#<?= html($tag) ?></span>
                        
                </label>
        </div>
            

        <?php endforeach ?>
    </div>
        
</section>

    

</div>