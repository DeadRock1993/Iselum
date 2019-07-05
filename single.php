<?php get_header(); ?>
<div class="container">
            
<section id="dictionary-acticle">

    <article>

        <br class="visible-print-block">

        <h1><?php the_title();?></h1>         
        
        <p>
            <span>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Нет постов по вашим критериям!</p>
                <?php endif; ?>
            </span>
        </p>

        <div class="fb-quote"></div>
        <div class="clearfix"></div>
        
        <small class="source">
            <span class="visible-print-inline">Источник: </span>
            <span>
                <?php
                    $cats = get_the_category();
                    for ($i = 0; $i < count($cats); $i++) {
                    $comma = '';
                    if ($i > 0) $comma = ', ';
                    echo $comma . '<a href="'.get_category_link($cats[$i]->cat_ID).' " target="_blank">'.$cats[$i]->cat_name.'</a>';
                    }
                ?>        
            </span>
            <span class="visible-print-inline">на Gufo.me</span>
        </small>

    </article>
    
    <div class="clearfix"></div>
    

    <hr class="hidden-print">
        
</section>


    <section id="dictionary-more" class="hidden-print">
        <article>
        <?php
        $categories = get_the_category($post->ID);
        if ($categories) {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
        $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'showposts'=>5,
        'orderby'=>rand,
        'caller_get_posts'=>1);
        $my_query = new wp_query($args);
        if( $my_query->have_posts() ) {
        echo '<h3>Другие определения:</h3>';
        echo '<ol id="pohzapisi">';
        while ($my_query->have_posts()) {
        $my_query->the_post();
        ?><li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
        <?php the_title(); ?></a> –– <?php the_excerpt(); ?> 
        <span class="small">
        <?php
                    $cats = get_the_category();
                    for ($i = 0; $i < count($cats); $i++) {
                    $comma = '';
                    if ($i > 0) $comma = ', ';
                    echo $comma . '<a href="'.get_category_link($cats[$i]->cat_ID).' " target="_blank">'.$cats[$i]->cat_name.'</a>';
                    }
        ?>
        </span>
        </li>
        <?php
        }
        echo '</ol>';
        }
        wp_reset_query();
        }
        ?>
        </article>
    </section>


        </div>

        <br><br><br>

        <?php require_once "quote.php"?>

        <br>
        <?php get_footer();?>         