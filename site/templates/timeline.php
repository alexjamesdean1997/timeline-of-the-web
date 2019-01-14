<?php snippet('header') ?>

<main class="main page-timeline">

    <aside class="sidebar">

        <div class="filters">

            <?php snippet('filter.categories') ?>

            <?php snippet('filter.tags') ?>

        </div>

    </aside>

    <div class="sidebar-trigger">
        <svg class="sidebar-trigger__open" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.4857 19.7418V15.3802C11.8286 15.1507 12.8571 13.9742 12.8571 12.5395C12.8571 11.1047 11.8286 9.92826 10.4857 9.69871V0H9.54286V9.69871C8.2 9.92826 7.17143 11.1047 7.17143 12.5395C7.17143 13.9742 8.2 15.1507 9.54286 15.3802V19.7418H10.4857ZM8.11428 12.5395C8.11428 11.4778 8.97143 10.6169 10.0286 10.6169C11.0857 10.6169 11.9429 11.4778 11.9429 12.5395C11.9429 13.6011 11.0857 14.462 10.0286 14.462C8.97143 14.462 8.11428 13.6011 8.11428 12.5395ZM2.37143 10.4448V19.5122H3.31429V10.4448C4.65714 10.2152 5.68571 9.03874 5.68571 7.60402C5.68571 6.1693 4.65714 4.99283 3.31429 4.76327V0H2.37143V4.76327C1.02857 4.99283 0 6.1693 0 7.60402C0 9.03874 1.02857 10.2152 2.37143 10.4448ZM2.85714 5.71019C3.91429 5.71019 4.77143 6.57102 4.77143 7.63271C4.77143 8.6944 3.91429 9.55524 2.85714 9.55524C1.8 9.55524 0.942858 8.6944 0.942858 7.63271C0.942858 6.57102 1.8 5.71019 2.85714 5.71019ZM17.6286 20V10.4448C18.9714 10.2152 20 9.03874 20 7.60402C20 6.1693 18.9714 4.99283 17.6286 4.76327V0.258248H16.6857V4.76327C15.3429 4.99283 14.3143 6.1693 14.3143 7.60402C14.3143 9.03874 15.3429 10.2152 16.6857 10.4448V20H17.6286ZM15.2286 7.60402C15.2286 6.54233 16.0857 5.68149 17.1429 5.68149C18.2 5.68149 19.0571 6.54233 19.0571 7.60402C19.0571 8.66571 18.2 9.52654 17.1429 9.52654C16.0857 9.52654 15.2286 8.66571 15.2286 7.60402Z"
                  fill="#1D1F21"/>
        </svg>
        <svg class="sidebar-trigger__close" width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.75L18.75 0L20 1.25L11.25 10L20 18.75L18.75 20L10 11.25L1.25 20L0 18.75L8.75 10L0 1.25L1.25 0L10 8.75Z" fill="black"/>
        </svg>
    </div>

    <div class="container container--offset">

        <section id="timeline">

            <div id="listing-events" class="listing-events">
                <?php snippet('event') ?>
            </div>

        </section>

    </div>

</main>

<?php snippet('footer') ?>



