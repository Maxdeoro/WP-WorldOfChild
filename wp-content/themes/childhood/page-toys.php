<?php
    /*
        Template Name: Toys
    */
?>

<?php get_header(); ?>

    <div class="toys" id="toys">
        <div class="container">
            <h2 class="subtitle">Soft toys</h2>
            <div class="toys__wrapper">
                <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,    // -1 - unlim numberposts
                        'category_name'    => 'soft_toys',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                    ?>
                        <div class="toys__item" style="background-image: url(<?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                }
                                    ?>)">
                            <div class="toys__item-info">
                                <div class="toys__item-title"><?php the_title(); ?></div>
                                <div class="toys__item-descr">
                                    <?php the_field('toys_descr') ?>                           
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Read more</a>
                            </div>
                        </div>
                        <!-- <?php the_post_thumbnail(); ?> -->
                    <?php
                    }
                    wp_reset_postdata();
                ?>
            </div>

            <h2 class="subtitle">Educational toys</h2>
            <div class="toys__wrapper">
                <?php
                    $my_posts = get_posts( array(
                        'numberposts' => -1,    // -1 - unlim numberposts
                        'category_name'    => 'educational_toys',
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        'post_type'   => 'post',
                        'suppress_filters' => true,
                    ) );

                    global $post;

                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                    ?>
                        <div class="toys__item" style="background-image: url(<?php 
                                if(has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                } else {
                                    echo get_template_directory_uri() . '/assets/img/not-found.jpg';
                                }
                                    ?>)">
                            <div class="toys__item-info">
                                <div class="toys__item-title"><?php the_title(); ?></div>
                                <div class="toys__item-descr">
                                    <?php the_field('toys_descr') ?>                           
                                </div>
                                <a href="<?php echo get_permalink(); ?>" class="minibutton toys__trigger">Read more</a>
                            </div>
                        </div>
                        <!-- <?php the_post_thumbnail(); ?> -->
                    <?php
                    }
                    wp_reset_postdata();
                ?>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="toys__alert">
                        <span><?php the_field('bold_span'); ?></span> <?php the_field('extra_text'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>