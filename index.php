<?php get_header() ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <div class="blog_area">
                            <div class="post_thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo the_post_thumbnail('post_thumbnails'); ?>
                                </a>
                            </div>
                            <div class="post_details">
                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>

                <?php
                    endwhile;
                else :
                    _e('Sorry, no posts matched your criteria.', 'textdomain');
                endif;
                ?>
                <div id="page_nav">
                    <?php if ('ali_pagenav') {
                        ali_pagenav();
                    } else { ?>
                        <?php next_post_link(); ?>
                        <?php previous_post_link(); ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>

</section>

<?php get_footer() ?>