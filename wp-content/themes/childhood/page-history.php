<?php
    /*
        Template Name: Our history
    */
?>

<?php get_header(); ?>

    <div class="aboutus" id="aboutus">
        <div class="container">
            <h1 class="title">Our history</h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="subtitle">
                        <?php the_field('history_1_title'); ?>
                    </div>
                    <div class="aboutus__text">
                        <?php the_field('history_1_descr'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="aboutus__img" src="<?php the_field('history_1_image'); ?>" alt="мир детства"> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img class="aboutus__img" src="<?php the_field('history_2_image'); ?>" alt="мир детства"> 
                </div>
                <div class="col-lg-6">
                    <div class="subtitle">
                        <?php the_field('history_2_title'); ?>
                    </div>
                    <div class="aboutus__text">
                        <?php the_field('history_2_descr'); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="subtitle">
                        <?php the_field('history_3_title'); ?>
                    </div>
                    <div class="aboutus__text">
                        <?php the_field('history_3_descr'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="aboutus__img" src="<?php the_field('history_3_image'); ?>" alt="мир детства"> 
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>