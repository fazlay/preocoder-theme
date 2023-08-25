<?php get_header() ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3 class="search_title">
                    <?php printf(__("Search Result for: %s", "alihossain"), get_search_query()) ?>
                </h3>
                <?php get_template_part('template_part/blog_setup') ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>

</section>

<?php get_footer() ?>