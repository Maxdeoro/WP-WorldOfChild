<?php
    /*
        Template Name: About company
    */
?>

<?php get_header(); ?>

    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-1">
                    <div class="about__img">
                        <?php 
                            $image = get_field('about_image');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif;
                            // print_r($image);
                            ?>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 col-xl-5 offset-xl-1">
                <h1 class="title underlined"><?php the_field('about_title'); ?></h1>
                    <div class="about__text">
                    <?php the_field('about_descr'); ?>
                    </div>
                    <a href="#" class="button">Learn more</a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>