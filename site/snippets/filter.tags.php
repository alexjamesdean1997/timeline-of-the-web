<?php // Fetch all tags ?>
<?php $tags = $page->children()->visible()->pluck('tags', ',', true); ?>

<div class="filters__group mb-50">
<section class="tag">
    <h2 class="headtag">NARROW DOWN YOUR <strong>SEARCH</strong></h2>
    <p>Choose a <strong>tag </strong> you're interested in</p>


        <form>
            <select name="tag">
            <option value="all-tags" id="all-tags">All tags</option>

        <?php foreach ($tags as $tag): ?>


        <option value="<?= html($tag) ?>" id="<?= html($tag) ?>"><?= html($tag) ?></option>
            

        <?php endforeach ?>
            </select>
        </form>
        
        
</section>

    

</div>