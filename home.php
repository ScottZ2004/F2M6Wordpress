<?php
get_header();
?>
    <?php
    if( have_posts()):
        while(have_posts()): the_post();?>
            <div class="blog-container">
                <h2><?php the_title() ?></h2>
                <?php the_content()?>
                <a href="<?php the_permalink();?>" class="button button-red">Lees meer!</a>
            </div>
        <?php endwhile;
    else:
        echo '<p>There are no posts!</p>';
    endif;
    ?>
<?php get_footer()?>
