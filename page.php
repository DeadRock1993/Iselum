<?php get_header(); ?>
<div class="container">

<section id="dictionary-list">
    <article>
       <h2><?php the_title();?></h2>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <h2 class="alert alert-light">По вашему запросу ничего не найдено...</h2>
        <?php endif; ?>
    </article>

    <div class="clearfix"></div>
                            <!--
        <nav id="next-page-control">
            <div class="row small">
                <div class="col text-right">
                    <a href="https://gufo.me/dict/accounting?page=2&amp;letter=%D0%B0" rel=“next”>Дальше</a>
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </div>
            </div>
        </nav>
                        -->
        <hr>

</section>


</div>

        <br><br><br>

        <?php require_once "quote.php"?>

        <br>

        <?php get_footer();?>





