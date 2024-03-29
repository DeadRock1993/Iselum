<?php get_header(); ?>
<div class="container">
    <section id="dictionary-index">
        <h2>Термины</h2>
        
        <div class="row"><!--Раздел термины-->
        
        <!-- Три колонки div=col-md-4  разделяют на три части термины-->
                    <?php 
                        $cat_id1 = get_cat_ID( 'Термины' );

                        $args = array(
                            'orderby'            => 'name',
                            'order'              => 'ASC',
                            'style'              => 'none',
                            'title_li'           => '',
                            'hide_empty'         => 0,
                            'child_of'           => $cat_id1,
                            'echo'               => 0,
                            'separator'          => '',
                        );

                        $cat = wp_list_categories( $args ); 
                        $cat = str_replace('">', '"><li class="inner-block inner-block-1 text-center"><span class="block-img-text">', $cat);
                        $cat = str_replace('<a', '<div class="col-md-4"><ul class="list-unstyled"><a', $cat);
                        $cat = str_replace('</a>', '</span><div class="color-overlay"></div></li></a></ul></div>', $cat);
                        echo $cat;
                    ?>                 

        </div>
        <h2>Словарь</h2>
        
        <div class="row"><!--Раздел словарь-->
        
        <!-- Три колонки div=col-md-4  разделяют на три части словарь-->
                    <?php 
                        $cat_id2 = get_cat_ID( 'Словарь' );

                        $args = array(
                            'orderby'            => 'name',
                            'order'              => 'ASC',
                            'style'              => 'none',
                            'title_li'           => '',
                            'hide_empty'         => 0,
                            'child_of'           => $cat_id2,
                            'echo'               => 0,
                            'separator'          => '',
                        );

                        $cat = wp_list_categories( $args ); 
                        $cat = str_replace('">', '"><li class="inner-block inner-block-1 text-center"><span class="block-img-text">', $cat);
                        $cat = str_replace('<a', '<div class="col-md-4"><ul class="list-unstyled"><a', $cat);
                        $cat = str_replace('</a>', '</span><div class="color-overlay"></div></li></a></ul></div>', $cat);
                        echo $cat;
                    ?>                 
        </div>

        
        
    </section>
</div>

        <br><br><br>

        <?php require_once "quote.php"?>

        <br>
        
<?php get_footer();?>

